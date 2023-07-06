<?php

namespace AdminKit\SEO\Forms\Components;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class SEOSection
{
    public static function make()
    {
        return Section::make(__('admin-kit-seo::seo.group_name'))
            ->relationship('seo')
            ->schema([
                TextInput::make('title')
                    ->label(__('admin-kit-seo::seo.title'))
                    ->maxLength(70)
                    ->columnSpan(2),

                Textarea::make('description')
                    ->label(__('admin-kit-seo::seo.description'))
                    ->maxLength(300)
                    ->rows(3)
                    ->columnSpan(2),

                Textarea::make('keywords')
                    ->label(__('admin-kit-seo::seo.keywords'))
                    ->maxLength(255)
                    ->rows(3)
                    ->columnSpan(2),
            ]);
    }
}
