<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsitesettingResource\Pages;
use App\Filament\Resources\WebsitesettingResource\RelationManagers;
use App\Models\Websitesetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsitesettingResource extends Resource
{
    protected static ?string $model = Websitesetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\ColorPicker::make('bg_color')
                    ->required()
                    ->default('#000000'),
                Forms\Components\ColorPicker::make('bg_secondary_color')
                    ->required()
                    ->default('#0D0D0D'),
                Forms\Components\ColorPicker::make('button_color')
                    ->required()
                    ->default('#fde047'),
                Forms\Components\ColorPicker::make('button_hover_color')
                    ->required()
                    ->default('#facc15'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bg_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bg_secondary_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_hover_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebsitesettings::route('/'),
            'create' => Pages\CreateWebsitesetting::route('/create'),
            'edit' => Pages\EditWebsitesetting::route('/{record}/edit'),
        ];
    }    
}
