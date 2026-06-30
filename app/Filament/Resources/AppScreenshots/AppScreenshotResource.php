<?php

namespace App\Filament\Resources\AppScreenshots;

use App\Filament\Resources\AppScreenshots\Pages\CreateAppScreenshot;
use App\Filament\Resources\AppScreenshots\Pages\EditAppScreenshot;
use App\Filament\Resources\AppScreenshots\Pages\ListAppScreenshots;
use App\Filament\Resources\AppScreenshots\Pages\ViewAppScreenshot;
use App\Filament\Resources\AppScreenshots\Schemas\AppScreenshotForm;
use App\Filament\Resources\AppScreenshots\Schemas\AppScreenshotInfolist;
use App\Filament\Resources\AppScreenshots\Tables\AppScreenshotsTable;
use App\Models\AppScreenshot;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AppScreenshotResource extends Resource
{
    protected static ?string $model = AppScreenshot::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Apps Management';

    protected static ?int $navigationSort = 40;

    protected static ?string $recordTitleAttribute = 'image';

    public static function form(Schema $schema): Schema
    {
        return AppScreenshotForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AppScreenshotInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppScreenshotsTable::configure($table);
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
            'index' => ListAppScreenshots::route('/'),
            'create' => CreateAppScreenshot::route('/create'),
            'view' => ViewAppScreenshot::route('/{record}'),
            'edit' => EditAppScreenshot::route('/{record}/edit'),
        ];
    }
}
