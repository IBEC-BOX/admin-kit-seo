<?php

namespace AdminKit\SEO\UI\Filament\Resources\PageSEOResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use AdminKit\SEO\UI\Filament\Resources\PageSEOResource;

class CreatePageSEO extends CreateRecord
{
    protected static string $resource = PageSEOResource::class;


    protected function getRedirectUrl(): string
    {
        return PageSEOResource::getUrl();
    }
}
