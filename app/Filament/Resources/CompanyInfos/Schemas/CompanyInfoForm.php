<?php

namespace App\Filament\Resources\CompanyInfos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CompanyInfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Section::make('Branding')->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                FileUpload::make('logo')
                    ->image()
                    ->directory('company')
                    ->imagePreviewHeight('120'),

                FileUpload::make('image')
                    ->image()
                    ->directory('company')
                    ->imagePreviewHeight('120'),
            ])->columns(2),

            Section::make('About Section')->schema([
                TextInput::make('about_title')
                    ->maxLength(255)
                    ->columnSpanFull(),

                Textarea::make('about_content')
                    ->rows(5)
                    ->columnSpanFull(),
            ]),
            ]);
    }
}
