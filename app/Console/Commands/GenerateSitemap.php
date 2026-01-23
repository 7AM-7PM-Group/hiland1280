<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap XML files';

    public function handle()
    {
        $this->generatePages();

        $this->info('✅ Sitemap generated successfully!');
    }

    private function generatePages()
    {
        $sitemap = Sitemap::create();

        $pages = [
            '/' => 1.0,
            '/menu' => 0.8,
            '/gallery' => 0.7,
            '/reservation' => 0.9,
        ];

        foreach ($pages as $url => $priority) {
            $sitemap->add(
                Url::create(url($url))
                    ->setPriority($priority)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        }

        $sitemap->writeToFile(public_path('sitemap-pages.xml'));
    }
}
