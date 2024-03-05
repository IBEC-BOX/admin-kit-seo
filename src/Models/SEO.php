<?php

namespace AdminKit\SEO\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class SEO extends AbstractModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_seo';

    protected $fillable = [
        'title',
        'description',
        'keywords',

        'og_url',
        'og_title',
        'og_description',
        'og_image',
    ];

    protected $translatable = [
        'title',
        'description',
        'keywords',

        'og_url',
        'og_title',
        'og_description',
        'og_image',
    ];

    public function seoable()
    {
        return $this->morphTo();
    }
}
