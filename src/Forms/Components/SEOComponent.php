<?php

namespace AdminKit\SEO\Forms\Components;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class SEOComponent
{
    public static function make()
    {
        $seo = TranslatableTabs::make(fn ($locale) => [
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

        ]);

        $og_tags = Grid::make(1)
            ->schema([
                SpatieMediaLibraryFileUpload::make('og_image')
                    ->label('OG '.__('admin-kit-seo::seo.image'))
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio('16:9')
                    ->imageEditorAspectRatios(['1:1', '4:3', '16:9'])
                    ->columnSpan(2)
                    ->imagePreviewHeight(250),
                TranslatableTabs::make(fn ($locale) => [
                    TextInput::make("og_url.$locale")
                        ->label('OG '.__('admin-kit-seo::seo.url'))
                        ->placeholder('https://example.com')
                        ->url()
                        ->maxLength(255)
                        ->columnSpan(2),
                    Textarea::make("og_title.$locale")
                        ->label('OG '.__('admin-kit-seo::seo.title'))
                        ->maxLength(255)
                        ->rows(3)
                        ->columnSpan(2),
                    Textarea::make("og_description.$locale")
                        ->label('OG '.__('admin-kit-seo::seo.description'))
                        ->maxLength(255)
                        ->rows(3)
                        ->columnSpan(2),
                ])
                    ->columnSpan(2),
            ]);

        $components[] =
            Section::make(__('admin-kit-seo::seo.seo_settings'))
                ->relationship('seo')
                ->collapsible()
                ->collapsed()
                ->schema([$seo]);

        if (config('admin-kit-seo.og_tags')) {
            $components[] =
                Section::make(__('admin-kit-seo::seo.og_settings'))
                    ->relationship('seo')
                    ->collapsible()
                    ->collapsed()
                    ->schema([$og_tags]);
        }

        return Grid::make(1)->schema($components);
    }
}
