<?php

namespace App\Filament\Resources\ContentBlocks\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContentBlockForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->label('Block key')
                    ->helperText('Where this text appears on the site. Created automatically — do not change.')
                    ->required()
                    ->disabledOn('edit')
                    ->dehydratedWhenDisabled(false),
                TextInput::make('page')
                    ->label('Page')
                    ->required()
                    ->disabledOn('edit')
                    ->dehydratedWhenDisabled(false),
                Select::make('type')
                    ->options(['text' => 'Plain text', 'rich' => 'Rich text'])
                    ->default('text')
                    ->required()
                    ->live()
                    ->disabledOn('edit')
                    ->dehydratedWhenDisabled(false),
                Textarea::make('value')
                    ->label('Content')
                    ->helperText('Leave empty to restore the original built-in text.')
                    ->rows(6)
                    ->columnSpanFull()
                    ->visible(fn($get) => $get('type') !== 'rich'),
                RichEditor::make('value')
                    ->label('Content')
                    ->helperText('Leave empty to restore the original built-in text.')
                    ->columnSpanFull()
                    ->visible(fn($get) => $get('type') === 'rich'),
            ]);
    }
}
