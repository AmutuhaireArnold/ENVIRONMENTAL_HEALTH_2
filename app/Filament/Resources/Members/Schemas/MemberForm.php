<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('committee_id')
                    ->label('Committee (archive)')
                    ->relationship('committee', 'name')
                    ->searchable()
                    ->preload()
                    ->helperText('Pick a committee OR an association below — not both.'),
                Select::make('organization_id')
                    ->label('Member association')
                    ->relationship('organization', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('role'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->directory('members')
                    ->maxSize(4096)
                    ->imageResizeMode('contain')
                    ->imageResizeTargetWidth('1000')
                    ->imageResizeTargetHeight('1000')
                    ->imageResizeUpscale(false),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
