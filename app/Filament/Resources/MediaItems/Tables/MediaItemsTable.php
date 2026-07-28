<?php

namespace App\Filament\Resources\MediaItems\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class MediaItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([
                ImageColumn::make('preview')
                    ->label('Preview')
                    ->imageSize(44)
                    ->square()
                    ->state(fn($record) => match (true) {
                        $record->type === 'youtube' && $record->youtube_id !== null => "https://img.youtube.com/vi/{$record->youtube_id}/default.jpg",
                        $record->file_path === null => null,
                        str_starts_with($record->file_path, '/') => url($record->file_path),
                        default => asset('storage/' . $record->file_path),
                    }),
                TextColumn::make('title')
                    ->searchable()
                    ->wrap()
                    ->placeholder('— untitled —'),
                TextColumn::make('type')
                    ->badge()
                    ->color(fn(string $state): string => $state === 'youtube' ? 'danger' : 'info'),
                TextColumn::make('youtube_id')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options(['image' => 'Image', 'youtube' => 'YouTube']),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
