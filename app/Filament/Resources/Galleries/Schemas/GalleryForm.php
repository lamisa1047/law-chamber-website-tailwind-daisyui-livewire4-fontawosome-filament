<?php

namespace App\Filament\Resources\Galleries\Schemas;

use App\Enums\FilePath;
use App\Enums\ImageSize;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory(FilePath::GALLERY->value)
                    ->maxSize(ImageSize::COMMON->value)
                    ->imagePreviewHeight('200')
                    ->columnSpanFull(),

                TextInput::make('title')
                    ->maxLength(255),

                TextInput::make('subtitle')
                    ->maxLength(255),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
