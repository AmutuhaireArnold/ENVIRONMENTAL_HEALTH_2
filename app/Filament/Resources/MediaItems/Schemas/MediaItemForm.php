<?php

namespace App\Filament\Resources\MediaItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MediaItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->options(['image' => 'Image', 'youtube' => 'Youtube'])
                    ->default('image')
                    ->required(),
                TextInput::make('title'),
                FileUpload::make('file_path')
                    ->label('Image file')
                    ->image()
                    ->disk('public')
                    ->directory('media')
                    ->maxSize(4096)
                    ->imageResizeMode('contain')
                    ->imageResizeTargetWidth('1600')
                    ->imageResizeTargetHeight('1600')
                    ->imageResizeUpscale(false),
                TextInput::make('youtube_id')
                    ->helperText('The video ID from the YouTube URL, e.g. dQw4w9WgXcQ'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
