<?php

namespace App\Filament\Resources\ContactLeads\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactLeadInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Lead')
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('email'),
                        TextEntry::make('phone'),
                        TextEntry::make('company'),
                        TextEntry::make('service_interest'),
                        TextEntry::make('source'),
                        TextEntry::make('status')->badge(),
                        TextEntry::make('message')->columnSpanFull(),
                        TextEntry::make('notes')->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
