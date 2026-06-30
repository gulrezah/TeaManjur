<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service')
                    ->schema([
                        ImageEntry::make('icon')->disk('public'),
                        TextEntry::make('title'),
                        TextEntry::make('slug'),
                        TextEntry::make('short_description')->columnSpanFull(),
                        TextEntry::make('description')->html()->columnSpanFull(),
                        IconEntry::make('is_featured')->boolean(),
                        IconEntry::make('is_published')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
