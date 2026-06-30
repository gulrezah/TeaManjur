<?php

namespace App\Filament\Resources\PromotionalPopups;

use App\Filament\Resources\PromotionalPopups\Pages\CreatePromotionalPopup;
use App\Filament\Resources\PromotionalPopups\Pages\EditPromotionalPopup;
use App\Filament\Resources\PromotionalPopups\Pages\ListPromotionalPopups;
use App\Filament\Resources\PromotionalPopups\Pages\ViewPromotionalPopup;
use App\Filament\Resources\PromotionalPopups\Schemas\PromotionalPopupForm;
use App\Filament\Resources\PromotionalPopups\Schemas\PromotionalPopupInfolist;
use App\Filament\Resources\PromotionalPopups\Tables\PromotionalPopupsTable;
use App\Models\PromotionalPopup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PromotionalPopupResource extends Resource
{
    protected static ?string $model = PromotionalPopup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Website Content';

    protected static ?int $navigationSort = 6;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PromotionalPopupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PromotionalPopupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PromotionalPopupsTable::configure($table);
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
            'index' => ListPromotionalPopups::route('/'),
            'create' => CreatePromotionalPopup::route('/create'),
            'view' => ViewPromotionalPopup::route('/{record}'),
            'edit' => EditPromotionalPopup::route('/{record}/edit'),
        ];
    }
}
