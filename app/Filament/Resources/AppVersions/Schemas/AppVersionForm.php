<?php

namespace App\Filament\Resources\AppVersions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppVersionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Version Details')
                    ->schema([
                        Select::make('app_id')
                            ->relationship('app', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        TextInput::make('version')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('release_date'),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        RichEditor::make('release_notes')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
