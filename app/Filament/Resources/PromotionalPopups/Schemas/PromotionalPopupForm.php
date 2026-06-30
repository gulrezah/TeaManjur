<?php

namespace App\Filament\Resources\PromotionalPopups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PromotionalPopupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Popup Content')
                    ->schema([
                        TextInput::make('eyebrow')
                            ->maxLength(255)
                            ->placeholder('Limited offer, New launch, Featured service'),
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('body')
                            ->rows(4)
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('promotional-popups')
                            ->visibility('public')
                            ->imagePreviewHeight('180')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Action & Publishing')
                    ->schema([
                        TextInput::make('button_label')
                            ->maxLength(255)
                            ->placeholder('Start a project'),
                        TextInput::make('button_url')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
