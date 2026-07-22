<?php

namespace App\Filament\Resources\TickerMessages\Pages;

use App\Filament\Resources\TickerMessages\TickerMessageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTickerMessage extends EditRecord
{
    protected static string $resource = TickerMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
