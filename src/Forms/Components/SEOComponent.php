<?php

namespace AdminKit\SEO\Forms\Components;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class SEOComponent
{
    public static function make()
    {
        return Grid::make(1)
            ->relationship('seo')
            ->schema([
                TranslatableTabs::make(fn($locale) => Tabs\Tab::make($locale)
                    ->schema([
                        TextInput::make("title.$locale")
                            ->label('SEO ' . __('admin-kit-seo::seo.title'))
                            ->maxLength(70)
                            ->columnSpan(2),

                        Textarea::make("description.$locale")
                            ->label('SEO ' . __('admin-kit-seo::seo.description'))
                            ->maxLength(300)
                            ->rows(3)
                            ->columnSpan(2),

                        Textarea::make("keywords.$locale")
                            ->label('SEO ' . __('admin-kit-seo::seo.keywords'))
                            ->maxLength(255)
                            ->rows(3)
                            ->columnSpan(2),
                    ])
                ),
            ]);
    }
}
