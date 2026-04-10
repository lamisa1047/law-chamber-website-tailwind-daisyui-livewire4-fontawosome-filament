<?php

namespace App\Filament\Resources\Attorneys\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class AttorneyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Info')->schema([
                    FileUpload::make('image')
                        ->image()
                        ->directory('attorneys')
                        ->imagePreviewHeight('180')
                        ->columnSpanFull(),

                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('working_area')
                        ->maxLength(255),

                    TextInput::make('experience')
                        ->maxLength(100)
                        ->placeholder('e.g. 14 years'),

                    TextInput::make('practice_areas')
                        ->maxLength(500)
                        ->placeholder('e.g. Family Law, Civil Litigation, Property Law')
                        ->helperText('Comma-separated list of practice areas')
                        ->columnSpanFull(),

                    Textarea::make('about')
                        ->rows(4)
                        ->columnSpanFull(),
                ])->columns(2),

                Section::make('Credentials')->schema([
                    Repeater::make('credentials')
                        ->schema([
                            TextInput::make('credential')
                                ->required()
                                ->placeholder('e.g. LL.B, University of Dhaka'),
                        ])
                        ->addActionLabel('Add Credential')
                        ->columnSpanFull(),
                ]),

                Section::make('Contact Details')->schema([
                    TextInput::make('email')
                        ->email()
                        ->maxLength(255),

                    TextInput::make('phone')
                        ->tel()
                        ->maxLength(20),

                    TextInput::make('whatsapp')
                        ->tel()
                        ->maxLength(20),

                    TextInput::make('facebook')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('twitter')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('linkedin')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('instagram')
                        ->url()
                        ->maxLength(255),
                ])->columns(2),

                Section::make('Settings')->schema([
                    TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Toggle::make('is_active')
                        ->default(true),
                ])->columns(2),

            ]);
    }
}
