<?php

namespace App\Filament\Resources\BlogCategories\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Category')
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
