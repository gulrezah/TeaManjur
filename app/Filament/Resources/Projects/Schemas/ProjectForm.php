<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Overview')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($set, ?string $state) => $set('slug', Str::slug((string) $state))),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        TextInput::make('client_name')
                            ->maxLength(255),
                        TextInput::make('industry')
                            ->maxLength(255),
                        Textarea::make('short_description')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Case Study')
                    ->schema([
                        RichEditor::make('challenge'),
                        RichEditor::make('solution'),
                        RichEditor::make('result'),
                    ])
                    ->columns(3),
                Section::make('Media & Links')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('projects'),
                        TextInput::make('website_url')
                            ->url()
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Section::make('Publishing')
                    ->schema([
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_featured')
                            ->default(false),
                        Toggle::make('is_published')
                            ->default(true),
                    ])
                    ->columns(3),
                Section::make('SEO')
                    ->schema([
                        TextInput::make('seo_title')
                            ->maxLength(255),
                        Textarea::make('seo_description')
                            ->maxLength(255),
                    ])
                    ->columns(2),
            ]);
    }
}
