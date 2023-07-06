<?php

namespace AdminKit\SEO\Traits;

use AdminKit\SEO\Models\SEO;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasSEO
{
    public function seo(): MorphOne
    {
        return $this->morphOne(SEO::class, 'seoable');
    }
}
