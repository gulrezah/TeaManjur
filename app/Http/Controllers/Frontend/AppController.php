<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\App;
use Illuminate\View\View;

class AppController extends Controller
{
    public function index(): View
    {
        $apps = App::query()
            ->published()
            ->with('appCategory')
            ->ordered()
            ->get();

        $featuredApps = $apps->where('is_featured', true);

        return view('pages.apps.index', [
            'apps' => $apps,
            'featuredApps' => $featuredApps->isNotEmpty() ? $featuredApps : $apps,
        ]);
    }

    public function show(string $slug): View
    {
        $app = App::query()
            ->published()
            ->where('slug', $slug)
            ->with([
                'appCategory',
                'appFeatures' => fn ($query) => $query->ordered(),
                'appScreenshots' => fn ($query) => $query->ordered(),
                'appVersions' => fn ($query) => $query->ordered(),
            ])
            ->firstOrFail();

        return view('pages.apps.show', [
            'app' => $app,
            'apps' => App::query()
                ->published()
                ->with('appCategory')
                ->ordered()
                ->get(),
        ]);
    }
}
