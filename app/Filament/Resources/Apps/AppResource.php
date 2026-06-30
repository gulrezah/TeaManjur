<?php

namespace App\Filament\Resources\Apps;

use App\Filament\Resources\Apps\Pages\CreateApp;
use App\Filament\Resources\Apps\Pages\EditApp;
use App\Filament\Resources\Apps\Pages\ListApps;
use App\Filament\Resources\Apps\Pages\ViewApp;
use App\Filament\Resources\Apps\Schemas\AppForm;
use App\Filament\Resources\Apps\Schemas\AppInfolist;
use App\Filament\Resources\Apps\Tables\AppsTable;
use App\Models\App;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AppResource extends Resource
{
    protected static ?string $model = App::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Apps Management';

    protected static ?int $navigationSort = 20;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AppForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AppInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppsTable::configure($table);
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
            'index' => ListApps::route('/'),
            'create' => CreateApp::route('/create'),
            'view' => ViewApp::route('/{record}'),
            'edit' => EditApp::route('/{record}/edit'),
        ];
    }
}
