<?php

namespace AdminKit\SEO\UI\Filament\Resources\PageSEOResource\Pages;

use AdminKit\SEO\UI\Filament\Resources\PageSEOResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePageSEO extends CreateRecord
{
    protected static string $resource = PageSEOResource::class;

    protected function getRedirectUrl(): string
    {
        return PageSEOResource::getUrl();
    }
}
