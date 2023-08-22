<?php

namespace App\Filament\Resources\WebsitesettingResource\Pages;

use App\Filament\Resources\WebsitesettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebsitesetting extends EditRecord
{
    protected static string $resource = WebsitesettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
