<?php

namespace App\Filament\Resources\Apps\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('App')
                    ->schema([
                        ImageEntry::make('icon')->disk('public'),
                        TextEntry::make('name'),
                        TextEntry::make('appCategory.name')->label('Category'),
                        TextEntry::make('tagline'),
                        TextEntry::make('short_description')->columnSpanFull(),
                        TextEntry::make('description')->html()->columnSpanFull(),
                        TextEntry::make('app_store_url')->url(fn ($state) => $state),
                        IconEntry::make('is_featured')->boolean(),
                        IconEntry::make('is_published')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
