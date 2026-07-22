<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('file_path')
                    ->label('PDF file')
                    ->required()
                    ->disk('public')
                    ->directory('documents')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(10240),
                Select::make('category')
                    ->options(['press' => 'Press', 'standard' => 'Standard', 'resource' => 'Resource'])
                    ->default('press')
                    ->required(),
                DateTimePicker::make('published_at')
                    ->default(now()),
            ]);
    }
}
