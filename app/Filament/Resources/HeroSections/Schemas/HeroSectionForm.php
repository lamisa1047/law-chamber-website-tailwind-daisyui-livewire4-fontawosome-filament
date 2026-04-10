<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            TextInput::make('subtitle')
                ->maxLength(255)
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->directory('hero')
                ->imagePreviewHeight('200')
                ->columnSpanFull(),
            ]);
    }
}
