<?php

namespace App\Filament\Resources\ProductSteps\Schemas;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rule;
use App\Models\Product;

class ProductStepForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // First Select: Choose Product
                Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'title')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->reactive(), // reactive for dependent field

                // Product Step Title
                TextInput::make('title')
                    ->label('Product Step Title')
                    ->required(),

                // Step Number
                TextInput::make('step')
                    ->label('Step Number')
                    ->numeric()
                    ->minValue(1)
                    ->required()
                    ->rules([
                        Rule::unique('product_steps', 'step')
                            ->where(function ($query) {
                                // $this->get() is available in Filament forms
                                $productId = request()->input('data.product_id'); // get first select value
                                if ($productId) {
                                    $query->where('product_id', $productId);
                                }
                            })
                            ->ignore(request()->input('data.id')), // ignore current record on edit
                    ]),

                // Second Select: Show all products in the same step
                Select::make('product_list')
                    ->label('Product List')
                    ->options(Product::pluck('title', 'id')->toArray())
                    ->searchable()
                    ->preload()
                    ->required(),

                // Coat Number
                TextInput::make('coat')
                    ->label('Coat Number')
                    ->numeric()
                    ->minValue(1),
            ]);
    }
}
