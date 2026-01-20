<?php

namespace App\Filament\Resources\ProductSteps\Pages;

use App\Filament\Resources\ProductSteps\ProductStepResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProductStep extends EditRecord
{
    protected static string $resource = ProductStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
