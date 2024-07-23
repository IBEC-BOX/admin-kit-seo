<?php

namespace AdminKit\SEO\Database\Factories;

use AdminKit\SEO\Models\SEO;
use AdminKit\Core\Facades\AdminKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class SEOFactory extends Factory
{
    protected $model = SEO::class;

    public function definition()
    {
        $title = $description = $keywords = $og_url = $og_title = $og_description = $og_image = [];
        foreach (AdminKit::locales() as $locale) {
            $title[$locale] = fake()->word()."_$locale";
            $description[$locale] = fake()->text(20);
            $keywords[$locale] = fake()->word();
            $og_url[$locale] = fake()->url();
            $og_title[$locale] = fake()->word();
            $og_description[$locale] = fake()->text(20);
        }

        return [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'og_url' => $og_url,
            'og_title' => $og_title,
            'og_description' => $og_description,
        ];
    }
}
