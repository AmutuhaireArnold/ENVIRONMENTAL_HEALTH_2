<?php

namespace App\Filament\Resources\Members\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class MembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([
                ImageColumn::make('photo')
                    ->label('Photo')
                    ->circular()
                    ->imageSize(44)
                    ->state(fn($record) => $record->photo
                        ? (str_starts_with($record->photo, '/') ? url($record->photo) : asset('storage/' . $record->photo))
                        : null)
                    ->defaultImageUrl(url('/images/PHOTO.jpeg')),
                TextColumn::make('name')
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('role')
                    ->searchable()
                    ->color('gray'),
                TextColumn::make('committee.name')
                    ->label('Committee')
                    ->badge()
                    ->color('primary')
                    ->placeholder('—')
                    ->toggleable(),
                TextColumn::make('organization.name')
                    ->label('Association')
                    ->badge()
                    ->color('info')
                    ->placeholder('—')
                    ->toggleable(),
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
                SelectFilter::make('committee')
                    ->relationship('committee', 'name')
                    ->preload(),
                SelectFilter::make('organization')
                    ->label('Association')
                    ->relationship('organization', 'name')
                    ->preload(),
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
