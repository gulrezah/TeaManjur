<?php

namespace App\Filament\Resources\AppFeatures\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppFeatureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('App Feature')
                    ->schema([
                        ImageEntry::make('icon')->disk('public'),
                        TextEntry::make('app.name'),
                        TextEntry::make('title'),
                        TextEntry::make('description')->columnSpanFull(),
                        TextEntry::make('sort_order'),
                    ])
                    ->columns(2),
            ]);
    }
}
