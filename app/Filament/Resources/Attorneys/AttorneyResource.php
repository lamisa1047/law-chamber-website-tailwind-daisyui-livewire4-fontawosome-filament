<?php

namespace App\Filament\Resources\Attorneys;

use App\Filament\Resources\Attorneys\Pages\CreateAttorney;
use App\Filament\Resources\Attorneys\Pages\EditAttorney;
use App\Filament\Resources\Attorneys\Pages\ListAttorneys;
use App\Filament\Resources\Attorneys\Schemas\AttorneyForm;
use App\Filament\Resources\Attorneys\Tables\AttorneysTable;
use App\Models\Attorney;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AttorneyResource extends Resource
{
    protected static ?string $model = Attorney::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?int $navigationSort                    = 2;

    protected static ?string $recordTitleAttribute = 'Attorney';

    public static function form(Schema $schema): Schema
    {
        return AttorneyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AttorneysTable::configure($table);
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
            'index' => ListAttorneys::route('/'),
            'create' => CreateAttorney::route('/create'),
            'edit' => EditAttorney::route('/{record}/edit'),
        ];
    }
}
