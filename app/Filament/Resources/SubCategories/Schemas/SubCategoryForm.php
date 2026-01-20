<?php

namespace App\Filament\Resources\SubCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class SubCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('title')
                    ->label('Sub Category Title')
                    ->required(),
                RichEditor::make('description')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('image')
                    ->label('Cover Image (make sure to provide 16:9 ratio image)')
                    ->image()
                    ->disk('public')
                    ->directory('subcategory')
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
                        $path = storage_path('app/public/subcategory/'.$filename);

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
                        return 'subcategory/'.$filename;
                    })
                    ->required(),
            ]);
    }
}
