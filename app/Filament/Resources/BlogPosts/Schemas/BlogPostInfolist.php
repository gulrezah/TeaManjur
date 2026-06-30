<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogPostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Post')
                    ->schema([
                        ImageEntry::make('featured_image')->disk('public'),
                        TextEntry::make('title'),
                        TextEntry::make('blogCategory.name')->label('Category'),
                        TextEntry::make('excerpt')->columnSpanFull(),
                        TextEntry::make('content')->html()->columnSpanFull(),
                        TextEntry::make('published_at')->dateTime(),
                        IconEntry::make('is_featured')->boolean(),
                        IconEntry::make('is_published')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
