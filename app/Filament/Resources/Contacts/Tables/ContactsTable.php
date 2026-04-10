<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('phone')
                ->searchable()
                ->copyable(),

            TextColumn::make('whatsapp')
                ->copyable()
                ->color('gray'),

            TextColumn::make('full_address')
                ->limit(50)
                ->color('gray'),

            TextColumn::make('updated_at')
                ->label('Last Updated')
                ->dateTime('d M Y')
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
