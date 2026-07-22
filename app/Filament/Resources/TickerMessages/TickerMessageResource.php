<?php

namespace App\Filament\Resources\TickerMessages;

use App\Filament\Resources\TickerMessages\Pages\CreateTickerMessage;
use App\Filament\Resources\TickerMessages\Pages\EditTickerMessage;
use App\Filament\Resources\TickerMessages\Pages\ListTickerMessages;
use App\Filament\Resources\TickerMessages\Schemas\TickerMessageForm;
use App\Filament\Resources\TickerMessages\Tables\TickerMessagesTable;
use App\Models\TickerMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TickerMessageResource extends Resource
{
    protected static ?string $model = TickerMessage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TickerMessageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TickerMessagesTable::configure($table);
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
            'index' => ListTickerMessages::route('/'),
            'create' => CreateTickerMessage::route('/create'),
            'edit' => EditTickerMessage::route('/{record}/edit'),
        ];
    }
}
