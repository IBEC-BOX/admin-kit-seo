<?php

namespace AdminKit\SEO\UI\Filament\Resources\PageSEOResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\SEO\UI\Filament\Resources\PageSEOResource;

class EditPageSEO extends EditRecord
{
    protected static string $resource = PageSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
