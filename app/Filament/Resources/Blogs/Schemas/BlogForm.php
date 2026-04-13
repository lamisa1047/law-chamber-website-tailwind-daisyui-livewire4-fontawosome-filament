<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Enums\FilePath;
use App\Enums\ImageSize;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Details')->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn($state, callable $set) =>
                            $set('slug', str($state)->slug())
                        )
                        ->columnSpanFull(),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Select::make('category')
                        ->options(fn() => \App\Models\Category::pluck('name', 'name'))
                        ->searchable()
                        ->preload(),

                    TextInput::make('read_time')
                        ->maxLength(20)
                        ->placeholder('e.g. 6 min read'),

                    TagsInput::make('tags')
                        ->placeholder('Add tag and press Enter')
                        ->columnSpanFull(),

                    FileUpload::make('image')
                        ->image()
                        ->disk('public')
                        ->directory(FilePath::BLOG->value)
                        ->maxSize(ImageSize::MAX->value)
                        ->imagePreviewHeight('200')
                        ->columnSpanFull(),
                ])->columns(2),

                Section::make('Content')->schema([
                    RichEditor::make('content')
                        ->required()
                        ->toolbarButtons([
                            'bold',
                            'italic',
                            'underline',
                            'strike',
                            'h2',
                            'h3',
                            'bulletList',
                            'orderedList',
                            'blockquote',
                            'link',
                            'undo',
                            'redo',
                        ])
                        ->columnSpanFull(),
                ]),

                Section::make('Publishing')->schema([
                    Toggle::make('is_published')
                        ->default(false)
                        ->live(),

                ])->columns(2),
            ]);
    }
}
