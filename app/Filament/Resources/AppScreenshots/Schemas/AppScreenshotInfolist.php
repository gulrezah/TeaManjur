<?php

namespace App\Filament\Resources\AppScreenshots\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppScreenshotInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('App Screenshot')
                    ->schema([
                        ImageEntry::make('image')->disk('public'),
                        TextEntry::make('app.name'),
                        TextEntry::make('alt_text'),
                        TextEntry::make('sort_order'),
                    ])
                    ->columns(2),
            ]);
    }
}
