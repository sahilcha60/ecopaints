<?php

namespace App\Filament\Resources\ProductSteps\Pages;

use App\Filament\Resources\ProductSteps\ProductStepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProductSteps extends ListRecords
{
    protected static string $resource = ProductStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
