<?php

namespace App\Filament\Resources\ContactLeads;

use App\Filament\Resources\ContactLeads\Pages\EditContactLead;
use App\Filament\Resources\ContactLeads\Pages\ListContactLeads;
use App\Filament\Resources\ContactLeads\Pages\ViewContactLead;
use App\Filament\Resources\ContactLeads\Schemas\ContactLeadForm;
use App\Filament\Resources\ContactLeads\Schemas\ContactLeadInfolist;
use App\Filament\Resources\ContactLeads\Tables\ContactLeadsTable;
use App\Models\ContactLead;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ContactLeadResource extends Resource
{
    protected static ?string $model = ContactLead::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Trust & Leads';

    protected static ?int $navigationSort = 30;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ContactLeadForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactLeadInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactLeadsTable::configure($table);
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
            'index' => ListContactLeads::route('/'),
            'view' => ViewContactLead::route('/{record}'),
            'edit' => EditContactLead::route('/{record}/edit'),
        ];
    }
}
