<?php

use Illuminate\Support\Facades\Route;
use AdminKit\SEO\UI\API\Controllers\PageSEOController;

Route::get('/page-seo/{name}', [PageSEOController::class, 'show']);
