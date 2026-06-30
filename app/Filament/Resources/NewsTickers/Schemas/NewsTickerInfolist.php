<?php

namespace App\Filament\Resources\NewsTickers\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsTickerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Ticker')
                    ->schema([
                        TextEntry::make('title'),
                        TextEntry::make('badge'),
                        TextEntry::make('url'),
                        TextEntry::make('sort_order'),
                        IconEntry::make('is_active')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
