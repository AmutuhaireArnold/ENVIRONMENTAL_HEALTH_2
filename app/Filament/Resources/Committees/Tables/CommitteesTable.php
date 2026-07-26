<?php

namespace App\Filament\Resources\Committees\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class CommitteesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([
                ImageColumn::make('hero_image')
                    ->label('Hero')
                    ->imageSize(44)
                    ->square()
                    ->state(fn($record) => $record->hero_image
                        ? (str_starts_with($record->hero_image, '/') ? url($record->hero_image) : asset('storage/' . $record->hero_image))
                        : null)
                    ->defaultImageUrl(url('/images/PHOTO.jpeg')),
                TextColumn::make('name')
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('term_label')
                    ->label('Term')
                    ->searchable(),
                TextColumn::make('type')
                    ->badge(),
                TextColumn::make('members_count')
                    ->label('Members')
                    ->counts('members')
                    ->badge()
                    ->color('gray'),
                TextColumn::make('slug')
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
                    ->options(['central' => 'Central', 'national' => 'National', 'other' => 'Other']),
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
