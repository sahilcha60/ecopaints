<?php

namespace App\Filament\Resources\ProductFeatures\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class ProductFeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('title')
                    ->label('Feature Title')
                    ->required(),
                RichEditor::make('description')
                    ->label('Feature Description')
                    ->columnSpanFull(),
                FileUpload::make('icon')
                    ->label('Feature Icon')
                    ->image()
                    ->disk('public')
                    ->directory('productfeature')
                    ->columnSpanFull()
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/jpg',
                        'image/webp',
                    ])
                    ->saveUploadedFileUsing(function ($file) {

                        $filename = uniqid('productfeature_').'.webp';

                        // Full correct path
                        $path = storage_path('app/public/storage/productfeature/'.$filename);

                        // Ensure directory exists
                        $directory = dirname($path);
                        if (! is_dir($directory)) {
                            mkdir($directory, 0777, true);
                        }

                        // Save as webp
                        Image::load($file->getRealPath())
                            ->format('webp')
                            ->quality(85)
                            ->save($path);

                        // Return path relative to storage disk
                        return 'storage/productfeature/'.$filename;
                    })
                    ->required(),
            ]);
    }
}
