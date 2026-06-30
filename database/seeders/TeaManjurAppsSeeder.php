<?php

namespace Database\Seeders;

use App\Models\App;
use App\Models\AppCategory;
use App\Models\AppFeature;
use App\Models\AppVersion;
use Illuminate\Database\Seeder;

class TeaManjurAppsSeeder extends Seeder
{
    public function run(): void
    {
        $category = AppCategory::updateOrCreate(
            ['slug' => 'productivity-apps'],
            [
                'name' => 'Productivity Apps',
                'description' => 'Premium iOS apps built to enhance productivity, simplify daily tasks, and support privacy-first workflows.',
                'sort_order' => 1,
                'is_published' => true,
            ],
        );

        $apps = [
            [
                'name' => 'Announcement Sticker App',
                'slug' => 'announcement-sticker-app',
                'tagline' => 'Create clean professional announcements without design hassle.',
                'short_description' => 'TeaManjur Announcement Sticker App helps you create clean, professional announcements for academic, institutional, and official use.',
                'description' => "TeaManjur Announcement Sticker App helps you create clean, professional announcements without any design hassle. It is built especially for academic, institutional, and official use. Privacy Policy: We don't collect any data for any purpose from any device.",
            ],
            [
                'name' => 'QR Code App',
                'slug' => 'qr-code-app',
                'tagline' => 'Create stunning QR event cards instantly.',
                'short_description' => 'TeaManjur QR Generator is an all-in-one toolkit to create event invitations, QR cards, and digital posters.',
                'description' => "Create stunning QR event cards instantly. TeaManjur QR Generator is your all-in-one toolkit to create professional-quality event invitations, QR cards, and digital posters. Privacy Policy: We don't collect any data for any purpose from any device.",
            ],
            [
                'name' => 'Rehab AI App',
                'slug' => 'rehab-ai-app',
                'tagline' => 'Intelligent wellness and rehabilitation companion.',
                'short_description' => 'Rehab AI App adapts to your emotional state and recommends breathing and relaxation exercises.',
                'description' => "Rehab AI App is an intelligent wellness and rehabilitation companion that adapts to your emotional state in real time. Using advanced on-device facial movement analysis, the app gently estimates how calm, energized, or balanced you feel and recommends suitable breathing and relaxation exercises. Privacy Policy: We don't collect any data for any purpose from any device.",
            ],
            [
                'name' => 'PDF Signer & Scanner',
                'slug' => 'pdf-signer-scanner',
                'tagline' => 'Sign PDFs like a pro.',
                'short_description' => 'Scan, create, and apply your signature instantly on PDF documents.',
                'description' => "Sign PDFs like a Pro — Scan, create, and apply your signature instantly. Capture paper signatures, remove backgrounds automatically, and place clean, realistic ink signatures anywhere on a PDF. Privacy Policy: We don't collect any data for any purpose from any device.",
            ],
            [
                'name' => 'PDF Reader Voice',
                'slug' => 'pdf-reader-voice',
                'tagline' => 'View, search, and listen to PDFs.',
                'short_description' => 'View, search, and read PDFs easily, or let the built-in voice engine read them aloud.',
                'description' => "View, search, and read your PDFs with ease — or let the built-in voice engine read them aloud in natural male or female voices. Privacy Policy: We don't collect any data for any purpose from any device.",
            ],
        ];

        foreach ($apps as $index => $appData) {
            $app = App::updateOrCreate(
                ['slug' => $appData['slug']],
                [
                    'app_category_id' => $category->id,
                    'name' => $appData['name'],
                    'tagline' => $appData['tagline'],
                    'short_description' => $appData['short_description'],
                    'description' => $appData['description'],
                    'app_store_url' => null,
                    'icon' => null,
                    'hero_image' => null,
                    'privacy_policy_url' => '/privacy-policy',
                    'support_url' => '/contact',
                    'sort_order' => $index + 1,
                    'is_featured' => true,
                    'is_published' => true,
                    'seo_title' => $appData['name'] . ' | TeaManjur Apps',
                    'seo_description' => $appData['short_description'],
                ],
            );

            $features = [
                ['title' => 'Privacy First', 'sort_order' => 1],
                ['title' => 'Native iOS Experience', 'sort_order' => 2],
                ['title' => 'Fast and Simple Workflow', 'sort_order' => 3],
            ];

            foreach ($features as $feature) {
                AppFeature::updateOrCreate(
                    [
                        'app_id' => $app->id,
                        'title' => $feature['title'],
                    ],
                    [
                        'description' => null,
                        'icon' => null,
                        'sort_order' => $feature['sort_order'],
                    ],
                );
            }

            AppVersion::updateOrCreate(
                [
                    'app_id' => $app->id,
                    'version' => '1.0',
                ],
                [
                    'release_date' => today(),
                    'release_notes' => 'Initial public listing on TeaManjur Apps.',
                    'sort_order' => 1,
                ],
            );
        }
    }
}
