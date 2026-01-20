<?php

namespace App\Filament\Resources\ProductFeatures\Pages;

use App\Filament\Resources\ProductFeatures\ProductFeatureResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProductFeature extends ViewRecord
{
    protected static string $resource = ProductFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
