<?php

namespace App\Filament\Resources\TickerMessages\Pages;

use App\Filament\Resources\TickerMessages\TickerMessageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTickerMessages extends ListRecords
{
    protected static string $resource = TickerMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
