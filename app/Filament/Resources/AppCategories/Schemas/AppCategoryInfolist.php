<?php

namespace App\Filament\Resources\AppCategories\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('App Category')
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('slug'),
                        TextEntry::make('description')->columnSpanFull(),
                        TextEntry::make('sort_order'),
                        IconEntry::make('is_published')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
