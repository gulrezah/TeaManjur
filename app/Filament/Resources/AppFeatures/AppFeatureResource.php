<?php

namespace App\Filament\Resources\AppFeatures;

use App\Filament\Resources\AppFeatures\Pages\CreateAppFeature;
use App\Filament\Resources\AppFeatures\Pages\EditAppFeature;
use App\Filament\Resources\AppFeatures\Pages\ListAppFeatures;
use App\Filament\Resources\AppFeatures\Pages\ViewAppFeature;
use App\Filament\Resources\AppFeatures\Schemas\AppFeatureForm;
use App\Filament\Resources\AppFeatures\Schemas\AppFeatureInfolist;
use App\Filament\Resources\AppFeatures\Tables\AppFeaturesTable;
use App\Models\AppFeature;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AppFeatureResource extends Resource
{
    protected static ?string $model = AppFeature::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Apps Management';

    protected static ?int $navigationSort = 30;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return AppFeatureForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AppFeatureInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppFeaturesTable::configure($table);
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
            'index' => ListAppFeatures::route('/'),
            'create' => CreateAppFeature::route('/create'),
            'view' => ViewAppFeature::route('/{record}'),
            'edit' => EditAppFeature::route('/{record}/edit'),
        ];
    }
}
