<?php

namespace Database\Seeders;

use App\Models\NewsTicker;
use Illuminate\Database\Seeder;

class NewsTickerSeeder extends Seeder
{
    public function run(): void
    {
        $tickers = [
            [
                'title' => 'TeaManjur builds modern websites, AI workflows, and app showcase pages for growing teams.',
                'badge' => 'Update',
                'url' => 'http://127.0.0.1:8000/services',
                'sort_order' => 1,
            ],
            [
                'title' => 'Explore TeaManjur Apple App Store apps with professional detail pages and screenshots.',
                'badge' => 'Apps',
                'url' => 'http://127.0.0.1:8000/apps',
                'sort_order' => 2,
            ],
            [
                'title' => 'AI integration services are available for business automation and smarter operations.',
                'badge' => 'AI',
                'url' => 'http://127.0.0.1:8000/ai-solutions',
                'sort_order' => 3,
            ],
            [
                'title' => 'Multi-technology web development for fast, scalable, and conversion-focused websites.',
                'badge' => 'Web',
                'url' => 'http://127.0.0.1:8000/web-development',
                'sort_order' => 4,
            ],
            [
                'title' => 'Start your next digital project with TeaManjur from the contact page.',
                'badge' => 'Contact',
                'url' => 'http://127.0.0.1:8000/contact',
                'sort_order' => 5,
            ],
        ];

        foreach ($tickers as $ticker) {
            NewsTicker::updateOrCreate(
                ['title' => $ticker['title']],
                $ticker + ['is_active' => true],
            );
        }
    }
}
