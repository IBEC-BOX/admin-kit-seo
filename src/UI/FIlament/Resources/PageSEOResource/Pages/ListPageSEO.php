<?php

namespace AdminKit\SEO\UI\Filament\Resources\PageSEOResource\Pages;

use AdminKit\SEO\UI\Filament\Resources\PageSEOResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageSEO extends ListRecords
{
    protected static string $resource = PageSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
