<?php

namespace App\Filament\Resources\ProductSteps\Pages;

use App\Filament\Resources\ProductSteps\ProductStepResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProductStep extends ViewRecord
{
    protected static string $resource = ProductStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
