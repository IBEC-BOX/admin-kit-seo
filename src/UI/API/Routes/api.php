<?php

use AdminKit\SEO\UI\API\Controllers\PageSEOController;
use Illuminate\Support\Facades\Route;

Route::get('/page-seo/{name}', [PageSEOController::class, 'show']);
