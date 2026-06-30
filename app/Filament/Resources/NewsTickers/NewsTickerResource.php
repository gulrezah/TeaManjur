<?php

namespace App\Filament\Resources\NewsTickers;

use App\Filament\Resources\NewsTickers\Pages\CreateNewsTicker;
use App\Filament\Resources\NewsTickers\Pages\EditNewsTicker;
use App\Filament\Resources\NewsTickers\Pages\ListNewsTickers;
use App\Filament\Resources\NewsTickers\Pages\ViewNewsTicker;
use App\Filament\Resources\NewsTickers\Schemas\NewsTickerForm;
use App\Filament\Resources\NewsTickers\Schemas\NewsTickerInfolist;
use App\Filament\Resources\NewsTickers\Tables\NewsTickersTable;
use App\Models\NewsTicker;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class NewsTickerResource extends Resource
{
    protected static ?string $model = NewsTicker::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Website Content';

    protected static ?int $navigationSort = 5;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return NewsTickerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NewsTickerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewsTickersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNewsTickers::route('/'),
            'create' => CreateNewsTicker::route('/create'),
            'view' => ViewNewsTicker::route('/{record}'),
            'edit' => EditNewsTicker::route('/{record}/edit'),
        ];
    }
}
