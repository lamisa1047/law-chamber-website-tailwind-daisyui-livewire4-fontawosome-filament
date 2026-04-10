<?php

namespace App\Filament\Resources\Attorneys\Pages;

use App\Filament\Resources\Attorneys\AttorneyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAttorney extends EditRecord
{
    protected static string $resource = AttorneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
