<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Category Title')
                    ->required(),
                RichEditor::make('description')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('image')
                    ->label('Cover Image (make sure to provide 16:9 ratio image)')
                    ->image()
                    ->disk('public')
                    ->directory('category')
                    ->columnSpanFull()
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/jpg',
                        'image/webp',
                    ])
                    ->saveUploadedFileUsing(function ($file) {

                        $filename = uniqid('category_').'.webp';

                        // Full correct path
                        $path = storage_path('app/public/category/'.$filename);

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
                        return 'category/'.$filename;
                    })
                    ->required(),
            ]);
    }
}
