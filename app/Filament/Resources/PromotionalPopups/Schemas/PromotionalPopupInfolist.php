<?php

namespace App\Filament\Resources\PromotionalPopups\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PromotionalPopupInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Popup')
                    ->schema([
                        TextEntry::make('eyebrow'),
                        TextEntry::make('title'),
                        TextEntry::make('body')->columnSpanFull(),
                        ImageEntry::make('image')
                            ->disk('public')
                            ->columnSpanFull(),
                        TextEntry::make('button_label'),
                        TextEntry::make('button_url'),
                        TextEntry::make('sort_order'),
                        IconEntry::make('is_active')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
