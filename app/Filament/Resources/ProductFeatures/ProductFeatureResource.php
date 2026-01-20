<?php

namespace App\Filament\Resources\ProductFeatures;

use App\Filament\Resources\ProductFeatures\Pages\CreateProductFeature;
use App\Filament\Resources\ProductFeatures\Pages\EditProductFeature;
use App\Filament\Resources\ProductFeatures\Pages\ListProductFeatures;
use App\Filament\Resources\ProductFeatures\Pages\ViewProductFeature;
use App\Filament\Resources\ProductFeatures\Schemas\ProductFeatureForm;
use App\Filament\Resources\ProductFeatures\Schemas\ProductFeatureInfolist;
use App\Filament\Resources\ProductFeatures\Tables\ProductFeaturesTable;
use App\Models\ProductFeature;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductFeatureResource extends Resource
{
    protected static ?string $model = ProductFeature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static ?string $recordTitleAttribute = 'ProductFeature';

    protected static string|UnitEnum|null $navigationGroup = 'Product';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ProductFeatureForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductFeatureInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductFeaturesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProductFeatures::route('/'),
            'create' => CreateProductFeature::route('/create'),
            'view' => ViewProductFeature::route('/{record}'),
            'edit' => EditProductFeature::route('/{record}/edit'),
        ];
    }
}
