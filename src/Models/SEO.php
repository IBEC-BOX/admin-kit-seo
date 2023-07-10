<?php

namespace AdminKit\SEO\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Spatie\Translatable\HasTranslations;

class SEO extends AbstractModel
{
    use HasTranslations;

    protected $table = 'admin_kit_seo';

    protected $fillable = [
        'title',
        'description',
        'keywords',
    ];

    protected $translatable = [
        'title',
        'description',
        'keywords',
    ];

    public function seoable()
    {
        return $this->morphTo();
    }
}
