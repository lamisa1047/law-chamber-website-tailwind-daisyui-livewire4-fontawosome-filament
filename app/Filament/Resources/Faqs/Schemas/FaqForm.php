<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Textarea::make('question')
                ->required()
                ->rows(2)
                ->columnSpanFull(),

            Textarea::make('answer')
                ->required()
                ->rows(4)
                ->columnSpanFull(),

            TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Toggle::make('is_active')
                ->default(true),
            ])->columns(2);
    }
}
