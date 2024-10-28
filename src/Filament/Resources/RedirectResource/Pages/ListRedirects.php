<?php

namespace Erikgreasy\FilamentRedirects\Filament\Resources\RedirectResource\Pages;

use Erikgreasy\FilamentRedirects\Filament\Resources\RedirectResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRedirects extends ListRecords
{
    protected static string $resource = RedirectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
