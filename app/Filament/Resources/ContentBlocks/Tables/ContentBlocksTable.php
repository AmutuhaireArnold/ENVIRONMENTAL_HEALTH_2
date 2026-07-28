<?php

namespace App\Filament\Resources\ContentBlocks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContentBlocksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultGroup('page')
            ->defaultSort('key')
            ->columns([
                TextColumn::make('key')
                    ->label('Block')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('page')
                    ->badge()
                    ->searchable(),
                TextColumn::make('value')
                    ->label('Content')
                    ->limit(80)
                    ->searchable()
                    ->placeholder('— using built-in text —')
                    ->html(),
                TextColumn::make('updated_at')
                    ->label('Last edited')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('Reset to built-in text'),
                ]),
            ]);
    }
}
