<?php

namespace App\Filament\Resources\AppCategories;

use App\Filament\Resources\AppCategories\Pages\CreateAppCategory;
use App\Filament\Resources\AppCategories\Pages\EditAppCategory;
use App\Filament\Resources\AppCategories\Pages\ListAppCategories;
use App\Filament\Resources\AppCategories\Pages\ViewAppCategory;
use App\Filament\Resources\AppCategories\Schemas\AppCategoryForm;
use App\Filament\Resources\AppCategories\Schemas\AppCategoryInfolist;
use App\Filament\Resources\AppCategories\Tables\AppCategoriesTable;
use App\Models\AppCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AppCategoryResource extends Resource
{
    protected static ?string $model = AppCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Apps Management';

    protected static ?int $navigationSort = 10;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AppCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AppCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppCategoriesTable::configure($table);
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
            'index' => ListAppCategories::route('/'),
            'create' => CreateAppCategory::route('/create'),
            'view' => ViewAppCategory::route('/{record}'),
            'edit' => EditAppCategory::route('/{record}/edit'),
        ];
    }
}
