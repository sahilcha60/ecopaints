<?php

namespace App\Filament\Resources\ProductSteps;

use App\Filament\Resources\ProductSteps\Pages\CreateProductStep;
use App\Filament\Resources\ProductSteps\Pages\EditProductStep;
use App\Filament\Resources\ProductSteps\Pages\ListProductSteps;
use App\Filament\Resources\ProductSteps\Pages\ViewProductStep;
use App\Filament\Resources\ProductSteps\Schemas\ProductStepForm;
use App\Filament\Resources\ProductSteps\Schemas\ProductStepInfolist;
use App\Filament\Resources\ProductSteps\Tables\ProductStepsTable;
use App\Models\ProductStep;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductStepResource extends Resource
{
    protected static ?string $model = ProductStep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static ?string $recordTitleAttribute = 'ProductStep';

    protected static string|UnitEnum|null $navigationGroup = 'Product';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return ProductStepForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductStepInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductStepsTable::configure($table);
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
            'index' => ListProductSteps::route('/'),
            'create' => CreateProductStep::route('/create'),
            'view' => ViewProductStep::route('/{record}'),
            'edit' => EditProductStep::route('/{record}/edit'),
        ];
    }
}
