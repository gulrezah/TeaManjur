<?php

namespace App\Filament\Resources\NewsTickers\Pages;

use App\Filament\Resources\NewsTickers\NewsTickerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsTicker extends CreateRecord
{
    protected static string $resource = NewsTickerResource::class;
}
