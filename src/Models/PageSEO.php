<?php

namespace AdminKit\SEO\Models;

use AdminKit\SEO\Traits\HasSEO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSEO extends Model
{
    use HasFactory;
    use HasSEO;

    protected $table = 'admin_kit_page_seo';

    protected $fillable = [
        'name',
    ];
}
