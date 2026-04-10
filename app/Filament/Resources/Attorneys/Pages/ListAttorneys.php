<?php

namespace App\Filament\Resources\Attorneys\Pages;

use App\Filament\Resources\Attorneys\AttorneyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAttorneys extends ListRecords
{
    protected static string $resource = AttorneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
