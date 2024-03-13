<?php

namespace AdminKit\SEO\UI\Filament\Resources\PageSEOResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\SEO\UI\Filament\Resources\PageSEOResource;

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
