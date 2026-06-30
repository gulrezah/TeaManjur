<?php

namespace Database\Seeders;

use App\Models\PromotionalPopup;
use Illuminate\Database\Seeder;

class PromotionalPopupSeeder extends Seeder
{
    public function run(): void
    {
        PromotionalPopup::updateOrCreate(
            ['title' => 'Launch your next digital product with TeaManjur'],
            [
                'eyebrow' => 'Professional digital solutions',
                'body' => 'Get a modern website, AI-assisted workflow, app promotion page, or business automation system designed for speed, trust, and growth.',
                'button_label' => 'Start a project',
                'button_url' => 'http://127.0.0.1:8000/contact',
                'sort_order' => 1,
                'is_active' => true,
            ],
        );
    }
}
