<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AppController extends Controller
{
    public function index(): View
    {
        return view('pages.apps.index', [
            'apps' => $this->apps(),
        ]);
    }

    public function show(string $slug): View
    {
        $app = collect($this->apps())->firstWhere('slug', $slug);

        abort_if($app === null, 404);

        return view('pages.apps.show', [
            'app' => $app,
        ]);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function apps(): array
    {
        return [
            [
                'name' => 'Tenvir',
                'slug' => 'tenvir',
                'category' => 'Productivity',
                'tagline' => 'A focused mobile experience for everyday digital workflows.',
                'description' => 'Tenvir is built for people who want lightweight tools, clear screens, and dependable utility on iPhone.',
                'features' => ['Fast daily actions', 'Clean iOS-first interface', 'Useful reminders and simple organization'],
            ],
            [
                'name' => 'Kids Learning App',
                'slug' => 'kids-learning-app',
                'category' => 'Education',
                'tagline' => 'Friendly learning moments for young minds.',
                'description' => 'A sample TeaManjur learning app concept for early education, practice, and playful skill building.',
                'features' => ['Age-friendly lessons', 'Colorful practice flows', 'Parent-ready progress ideas'],
            ],
            [
                'name' => 'Business Utility App',
                'slug' => 'business-utility-app',
                'category' => 'Business',
                'tagline' => 'Simple tools for teams, owners, and operators.',
                'description' => 'A practical utility app concept for small business tasks, quick calculations, and workflow support.',
                'features' => ['Business-ready tools', 'Simple mobile dashboards', 'Automation-friendly structure'],
            ],
        ];
    }
}
