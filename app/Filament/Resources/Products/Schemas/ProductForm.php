<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('sub_category_id')
                    ->label('Sub Category')
                    ->relationship('subcategory', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('title')
                    ->label('Product Title')
                    ->required(),
                RichEditor::make('short_description')
                    ->label('Main Description')
                    ->columnSpanFull(),
                RichEditor::make('full_description')
                    ->label('Full Description')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('image')
                    ->label('Product Image')
                    ->image()
                    ->disk('public')
                    ->directory('product')
                    ->columnSpanFull()
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/jpg',
                        'image/webp',
                    ])
                    ->saveUploadedFileUsing(function ($file) {

                        $filename = uniqid('subcategory_').'.webp';

                        // Full correct path
                        $path = storage_path('app/public/storage/product/'.$filename);

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
                        return 'storage/product/'.$filename;
                    })
                    ->required(),
                FileUpload::make('cover_image')
                    ->label('Cover Image (make sure to provide 16:9 ratio image)')
                    ->image()
                    ->disk('public')
                    ->directory('product')
                    ->columnSpanFull()
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/jpg',
                        'image/webp',
                    ])
                    ->saveUploadedFileUsing(function ($file) {

                        $filename = uniqid('productcoverimage_').'.webp';

                        // Full correct path
                        $path = storage_path('app/public/storage/product/'.$filename);

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
                        return 'storage/product/'.$filename;
                    })
                    ->required(),
                TextInput::make('divided_value')
                    ->label('Divided Value')
                    ->minValue(1)
                    ->numeric(),
            ]);
    }
}
