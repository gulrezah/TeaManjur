<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function aiSolutions(): View
    {
        return view('pages.ai-solutions');
    }

    public function webDevelopment(): View
    {
        return view('pages.web-development');
    }

    public function portfolio(): View
    {
        return view('pages.portfolio.index');
    }

    public function privacyPolicy(): View
    {
        return view('pages.privacy-policy');
    }
}
