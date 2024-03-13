<?php

namespace AdminKit\SEO\UI\API\Controllers;

use AdminKit\SEO\Models\PageSEO;
use AdminKit\SEO\UI\API\Resources\PageSEOResource;

class PageSEOController extends Controller
{
    /**
     * pageSEO.show
     *
     * How to use OG tags?
     *
     * ```
     * <meta property="og:type" content="website">
     * <meta property="og:url" content="{{ og.url }}">
     * <meta property="og:title" content="{{ og.title }}">
     * <meta property="og:description" content="{{ og.description }}">
     * <meta property="og:image" content="{{ og.image }}">
     *
     * <meta name="twitter:card" content="summary_large_image">
     * <meta property="twitter:domain" content="{{ new URL(og.url).hostname }}">
     * <meta property="twitter:url" content="{{ og.url }}">
     * <meta name="twitter:title" content="{{ og.title }}">
     * <meta name="twitter:description" content="{{ og.description }}">
     * <meta name="twitter:image" content="{{ og.image }}">
     * ```
     */
    public function show(string $name): PageSEOResource
    {
        $pageSEO = PageSEO::query()
            ->where('name', $name)
            ->firstOrFail();

        return new PageSEOResource($pageSEO);
    }
}
