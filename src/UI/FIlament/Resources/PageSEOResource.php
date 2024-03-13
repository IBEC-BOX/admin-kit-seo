<?php

namespace AdminKit\SEO\UI\Filament\Resources;

use AdminKit\SEO\Forms\Components\SEOComponent;
use AdminKit\SEO\Models\PageSEO;
use AdminKit\SEO\UI\Filament\Resources\PageSEOResource\Pages;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageSEOResource extends Resource
{
    protected static ?string $model = PageSEO::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('admin-kit-seo::seo.resource.page_name'))
                    ->required(),
                SEOComponent::make(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-seo::seo.resource.id')),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin-kit-seo::seo.resource.page_name')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-seo::seo.resource.created_at')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageSEO::route('/'),
            'create' => Pages\CreatePageSEO::route('/create'),
            'edit' => Pages\EditPageSEO::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-seo::seo.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-seo::seo.resource.plural_label');
    }
}
