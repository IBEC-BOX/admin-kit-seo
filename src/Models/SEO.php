<?php

namespace AdminKit\SEO\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;

class SEO extends AbstractModel
{
    protected $table = 'admin_kit_seo';

    protected $fillable = [
        'title',
    ];
}
