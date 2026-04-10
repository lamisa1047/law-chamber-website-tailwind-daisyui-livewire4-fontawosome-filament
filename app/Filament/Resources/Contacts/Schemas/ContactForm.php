<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Section::make('Contact Details')->schema([
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(20),

                TextInput::make('whatsapp')
                    ->tel()
                    ->maxLength(20),
            ])->columns(2),

            Section::make('Social Links')->schema([
                TextInput::make('facebook')->url()->maxLength(255),
                TextInput::make('linkedin')->url()->maxLength(255),
                TextInput::make('twitter')->url()->maxLength(255),
                TextInput::make('instagram')->url()->maxLength(255),
            ])->columns(2),

            Section::make('Location')->schema([
                Textarea::make('full_address')
                    ->rows(2)
                    ->columnSpanFull(),

                TextInput::make('latitude')
                    ->numeric()
                    ->step(0.0000001),

                TextInput::make('longitude')
                    ->numeric()
                    ->step(0.0000001),
            ])->columns(2),

        ]);
    }
}
