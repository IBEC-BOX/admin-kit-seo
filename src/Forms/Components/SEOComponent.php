<?php

namespace AdminKit\SEO\Forms\Components;

use Illuminate\Support\Collection;
use Filament\Forms\Components\Section;
use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class SEOComponent
{
    public static function make()
    {
        return Grid::make(1)
            ->relationship('seo')
            ->schema([
                TranslatableTabs::make(fn ($locale) => Tabs\Tab::make($locale)
                    ->schema(
                        collect([
                            TextInput::make("title.$locale")
                                ->label('SEO '.__('admin-kit-seo::seo.title'))
                                ->maxLength(70)
                                ->columnSpan(2),

                            Textarea::make("description.$locale")
                                ->label('SEO '.__('admin-kit-seo::seo.description'))
                                ->maxLength(300)
                                ->rows(3)
                                ->columnSpan(2),

                            Textarea::make("keywords.$locale")
                                ->label('SEO '.__('admin-kit-seo::seo.keywords'))
                                ->maxLength(255)
                                ->rows(3)
                                ->columnSpan(2),
                        ])
                            ->when(
                                config('admin-kit-seo.og_tags'),
                                fn (Collection $collection) => $collection->merge([
                                    Section::make('SEO OG (Open Graph)')->schema([
                                        TextInput::make("og_url.$locale")
                                            ->label('OG '.__('admin-kit-seo::seo.url'))
                                            ->placeholder('https://example.com')
                                            ->url()
                                            ->maxLength(255)
                                            ->columnSpan(2),
                                        Textarea::make("og_title.$locale")
                                            ->label('SEO '.__('admin-kit-seo::seo.title'))
                                            ->maxLength(255)
                                            ->rows(3)
                                            ->columnSpan(2),
                                        Textarea::make("og_description.$locale")
                                            ->label('OG '.__('admin-kit-seo::seo.description'))
                                            ->maxLength(255)
                                            ->rows(3)
                                            ->columnSpan(2),
                                        SpatieMediaLibraryFileUpload::make("og_image.$locale")
                                            ->label('OG '.__('admin-kit-seo::seo.image'))
                                            ->image()
                                            ->imageEditor()
                                            ->imageCropAspectRatio('16:9')
                                            ->imageEditorAspectRatios(['1:1', '4:3', '16:9'])
                                            ->columnSpan(2),
                                    ]),
                                ])
                            )
                            ->toArray()
                    )
                ),
            ]);
    }
}
