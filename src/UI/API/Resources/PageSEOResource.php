<?php

namespace AdminKit\SEO\UI\API\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageSEOResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $resource = [
            'name' => $this->name,
            'title' => $this->seo->title,
            'description' => $this->seo->description,
            'keywords' => $this->seo->keywords,
        ];

        if (config('admin-kit-seo.og_tags')) {
            $resource = [
                ...$resource,
                'og' => [
                    'url' => $this->seo->og_url,
                    'title' => $this->seo->og_title,
                    'description' => $this->seo->og_description,
                    'image' => $this->seo->getFirstMediaUrl(),
                ],
            ];
        }

        return $resource;
    }
}
