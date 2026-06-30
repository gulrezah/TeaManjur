<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project')
                    ->schema([
                        ImageEntry::make('image')->disk('public'),
                        TextEntry::make('title'),
                        TextEntry::make('client_name'),
                        TextEntry::make('industry'),
                        TextEntry::make('short_description')->columnSpanFull(),
                        TextEntry::make('description')->html()->columnSpanFull(),
                        TextEntry::make('challenge')->html(),
                        TextEntry::make('solution')->html(),
                        TextEntry::make('result')->html(),
                        IconEntry::make('is_featured')->boolean(),
                        IconEntry::make('is_published')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
