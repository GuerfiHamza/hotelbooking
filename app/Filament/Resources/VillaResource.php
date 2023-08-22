<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillaResource\Pages;
use App\Filament\Resources\VillaResource\RelationManagers;
use App\Models\Villa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\VillaImage;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\AttachAction;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Blade;
use Guava\FilamentIconPicker\Forms\IconPicker;

class VillaResource extends Resource
{
    protected static ?string $model = Villa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make([
                Step::make('Villa Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->columnSpanFull()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('bedrooms')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('bathrooms')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('beds')
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('facilities')
                            ->multiple()
                            ->preload()
                            ->createOptionForm([Forms\Components\TextInput::make('name')->required(), IconPicker::make('icon')->required()->cacheable(false)])
                            ->relationship(name: 'facilities', titleAttribute: 'name'),
                        Forms\Components\Select::make('amenities')
                            ->multiple()
                            ->preload()
                            ->createOptionForm([Forms\Components\TextInput::make('name')->required(), IconPicker::make('icon')->required()->cacheable(false)])
                            ->relationship(name: 'amenities', titleAttribute: 'name'),
                    ]),
                Step::make('Location Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('city_id')
                            ->relationship('city', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('address')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('latitude')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('longitude')
                            ->required()
                            ->numeric(),
                    ]),
                Step::make('Booking Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TimePicker::make('check_in_time')->required()->seconds(false),
                        Forms\Components\TimePicker::make('check_out_time')->required()->seconds(false),
                        Forms\Components\TextInput::make('min_stay_nights')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$'),
                        Forms\Components\TextInput::make('max_guests')
                            ->required()
                            ->numeric(),
                    ]),
                Step::make('Images')->schema([
                    Forms\Components\FileUpload::make('main_image')->required(),
                    Forms\Components\Repeater::make('images')
                        ->schema([
                            TextInput::make('title')->required(),
                            TextInput::make('description')->required(),
                            FileUpload::make('image')->required(),
                        ])
                        ->columns(2),
                ]),
                Step::make('SEO Settings')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('seo_title')->maxLength(255)->required(),
                        Forms\Components\TextInput::make('seo_keywords')->maxLength(255),
                        Forms\Components\Toggle::make('is_featured')->required(),

                        Forms\Components\Textarea::make('seo_description')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ]),
            ])->columnSpanFull()->skippable()->submitAction(new HtmlString(Blade::render(<<<BLADE
    <x-filament::button
        type="submit"
        size="sm"
    >
        Submit
    </x-filament::button>
BLADE))),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('city.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('bedrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bathrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('beds')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_guests')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')->searchable(),
                Tables\Columns\ImageColumn::make('main_image'),
                Tables\Columns\TextColumn::make('min_stay_nights')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_in_time'),
                Tables\Columns\TextColumn::make('check_out_time'),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
                Tables\Columns\TextColumn::make('contact_email')->searchable(),
                Tables\Columns\TextColumn::make('slug')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('seo_title')->searchable(),
                Tables\Columns\TextColumn::make('seo_keywords')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->emptyStateActions([Tables\Actions\CreateAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVillas::route('/'),
            'create' => Pages\CreateVilla::route('/create'),
            'edit' => Pages\EditVilla::route('/{record}/edit'),
        ];
    }
    public static function getRelations(): array
    {
        return [];
    }
}
