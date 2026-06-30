<?php

namespace App\Filament\Resources\AppVersions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppVersionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('App Version')
                    ->schema([
                        TextEntry::make('app.name'),
                        TextEntry::make('version'),
                        TextEntry::make('release_date')->date(),
                        TextEntry::make('release_notes')->html()->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
