<?php

namespace App\Filament\Resources\AppScreenshots\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppScreenshotForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Screenshot Details')
                    ->schema([
                        Select::make('app_id')
                            ->relationship('app', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        FileUpload::make('image')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->directory('apps/screenshots'),
                        TextInput::make('alt_text')
                            ->maxLength(255),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(2),
            ]);
    }
}
