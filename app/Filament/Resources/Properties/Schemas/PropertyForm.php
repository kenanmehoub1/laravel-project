<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->required(),

                Select::make('market_type')
                    ->label('Market Type')
                    ->options([
                        'primary' => 'Primary Market',
                        'secondary' => 'Secondary Market',
                    ])
                    ->required()
                    ->default('primary'),

                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),

                TextInput::make('bedrooms')
                    ->numeric()
                    ->default(null),

                TextInput::make('bathrooms')
                    ->numeric()
                    ->default(null),

                TextInput::make('area')
                    ->numeric()
                    ->default(null),

                TextInput::make('city')
                    ->default(null),

                TextInput::make('address')
                    ->default(null),

                Toggle::make('is_available')
                    ->required(),

                Section::make('الصور')
                    ->schema([

                        FileUpload::make('main_image')
                            ->label('الصورة الرئيسية')
                            ->image()
                            ->directory('properties/main')
                            ->disk('public')
                            ->maxSize(2048)
                            ->imageResizeTargetWidth('800')
                            ->imageResizeTargetHeight('600')
                            ->helperText(
                                'يفضل استخدام صورة بحجم 800×600 بكسل، بحد أقصى 2 ميجابايت'
                            )
                            ->columnSpanFull(),

                        FileUpload::make('images')
                            ->label('معرض الصور')
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('properties/gallery')
                            ->maxSize(2048)
                            ->maxFiles(10)
                            ->reorderable()
                            ->appendFiles()
                            ->helperText(
                                'يمكنك رفع عدة صور (حد أقصى 10 صور، 2 ميجابايت لكل صورة)'
                            )
                            ->columnSpanFull(),

                    ])
                    ->columns(1),
            ]);
    }
}