<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @php
        $navItems = [
            ['label' => 'About', 'route' => 'about', 'active' => 'about'],
            ['label' => 'Services', 'route' => 'services', 'active' => 'services'],
            ['label' => 'AI Solutions', 'route' => 'ai-solutions', 'active' => 'ai-solutions'],
            ['label' => 'Web Development', 'route' => 'web-development', 'active' => 'web-development'],
            ['label' => 'Portfolio', 'route' => 'portfolio.index', 'active' => 'portfolio.*'],
            ['label' => 'Apps', 'route' => 'apps.index', 'active' => 'apps.*'],
            ['label' => 'Blog', 'route' => 'blog.index', 'active' => 'blog.*'],
        ];

        $newsTickers = \Illuminate\Support\Facades\Schema::hasTable('news_tickers')
            ? \App\Models\NewsTicker::query()->active()->ordered()->get()
            : collect();

        $promotionalPopup = request()->routeIs('home') && \Illuminate\Support\Facades\Schema::hasTable('promotional_popups')
            ? \App\Models\PromotionalPopup::query()->active()->ordered()->first()
            : null;
    @endphp
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TeaManjur builds modern websites, AI integrations, multi-technology web systems, business automation, and mobile app experiences.">

        <title>@yield('title', 'TeaManjur') | TeaManjur</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/favicon.png') }}">

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-950 text-slate-100 antialiased">
        <div class="min-h-screen bg-[linear-gradient(135deg,#020617_0%,#0f172a_42%,#111827_100%)]">
            <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/90 backdrop-blur-xl">
                <nav class="site-container flex items-center justify-between py-3" aria-label="Main navigation">
                    <a href="{{ route('home') }}" class="group flex min-w-0 items-center gap-3">
                        <img src="{{ asset('assets/logo-teamanjur-orange.png') }}" alt="TeaManjur logo" class="h-12 w-12 shrink-0 object-contain transition duration-300 group-hover:scale-105">
                        <span>
                            <span class="flex items-start gap-1 text-base font-semibold leading-tight text-white">TeaManjur<span class="text-[0.6rem] leading-none text-orange-200">&reg;</span></span>
                            <span class="block text-xs text-slate-400">AI-Digital Solutions Company</span>
                        </span>
                    </a>

                    <div class="hidden items-center gap-1 text-sm font-medium text-slate-200 lg:flex">
                        @foreach ($navItems as $item)
                            <a
                                class="{{ request()->routeIs($item['active']) ? 'nav-link-active' : 'nav-link' }}"
                                href="{{ route($item['route']) }}"
                            >
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                        <a class="{{ request()->routeIs('contact') ? 'nav-cta-active' : 'nav-cta' }}" href="{{ route('contact') }}">Contact</a>
                    </div>

                    <details class="relative lg:hidden">
                        <summary class="flex h-11 min-w-[4.75rem] cursor-pointer list-none items-center justify-center rounded-lg border border-white/15 bg-white/5 px-5 text-white transition hover:border-orange-300/60 hover:bg-white/10 marker:hidden">
                            <span class="sr-only">Open menu</span>
                            <span class="text-sm font-semibold leading-none">Menu</span>
                        </summary>
                        <div class="absolute right-0 mt-3 w-[min(20rem,calc(100vw-2rem))] rounded-lg border border-white/10 bg-slate-950 p-3 shadow-2xl shadow-slate-950/60">
                            @foreach ($navItems as $item)
                                <a
                                    class="{{ request()->routeIs($item['active']) ? 'mobile-nav-link-active' : 'mobile-nav-link' }}"
                                    href="{{ route($item['route']) }}"
                                >
                                    {{ $item['label'] }}
                                </a>
                            @endforeach
                            <a class="mt-2 block rounded-md bg-orange-500 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-orange-400" href="{{ route('contact') }}">Start a project</a>
                        </div>
                    </details>
                </nav>

                @if (request()->routeIs('home') && $newsTickers->isNotEmpty())
                    <section class="border-t border-white/10 bg-slate-900/95 text-white" aria-label="Latest updates">
                        <div class="site-container flex items-center gap-4 py-2">
                            <div class="shrink-0 rounded-md bg-orange-500 px-3 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-sm shadow-orange-950/20">
                                News
                            </div>

                            <div class="min-w-0 flex-1 overflow-hidden">
                                <div class="news-ticker-track flex w-max items-center gap-8">
                                    @foreach ($newsTickers->concat($newsTickers) as $ticker)
                                        <div class="flex items-center gap-3 text-sm text-slate-200">
                                            @if ($ticker->badge)
                                                <span class="rounded-full border border-cyan-200/30 bg-cyan-300/10 px-2 py-0.5 text-[0.7rem] font-semibold uppercase tracking-wide text-cyan-100">{{ $ticker->badge }}</span>
                                            @endif

                                            @if ($ticker->url)
                                                <a class="font-medium transition hover:text-orange-200" href="{{ $ticker->url }}" target="_blank" rel="noopener">{{ $ticker->title }}</a>
                                            @else
                                                <span class="font-medium">{{ $ticker->title }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="border-t border-white/10 bg-slate-950">
                <div class="site-container grid gap-10 py-14 md:grid-cols-[1.25fr_0.75fr_0.85fr_1fr]">
                    <div>
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/logo-teamanjur-orange.png') }}" alt="TeaManjur logo" class="h-12 w-12 object-contain">
                            <span class="text-lg font-semibold text-white">TeaManjur</span>
                        </div>
                        <p class="mt-4 max-w-md text-sm leading-6 text-slate-400">Modern web development, AI integration, multi-technology web solutions, business automation, and mobile app promotion for teams ready to move faster.</p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="footer-chip">Privacy-first</span>
                            <span class="footer-chip">AI-ready</span>
                            <span class="footer-chip">App Store</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8 md:contents">
                        <div>
                            <h2 class="footer-heading">Company</h2>
                            <div class="mt-4 grid gap-3 text-sm text-slate-400">
                                <a class="hover:text-white" href="{{ route('about') }}">About</a>
                                <a class="hover:text-white" href="{{ route('portfolio.index') }}">Portfolio</a>
                                <a class="hover:text-white" href="{{ route('blog.index') }}">Blog</a>
                                <a class="hover:text-white" href="{{ route('privacy-policy') }}">Privacy Policy</a>
                                <a class="hover:text-white" href="{{ route('contact') }}">Contact</a>
                            </div>
                        </div>
                        <div>
                            <h2 class="footer-heading">Solutions</h2>
                            <div class="mt-4 grid gap-3 text-sm text-slate-400">
                                <a class="hover:text-white" href="{{ route('services') }}">Services</a>
                                <a class="hover:text-white" href="{{ route('ai-solutions') }}">AI Integration</a>
                                <a class="hover:text-white" href="{{ route('web-development') }}">Web Development</a>
                                <a class="hover:text-white" href="{{ route('apps.index') }}">Apple App Store Apps</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="footer-heading">Project Fit</h2>
                        <p class="mt-4 text-sm leading-6 text-slate-400">Best for companies that need a professional website, custom web workflow, AI-assisted operation, or an app promotion hub.</p>
                        <a class="mt-5 inline-flex text-sm font-semibold text-orange-300 transition hover:text-orange-200" href="{{ route('contact') }}">Discuss your build</a>
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-slate-500">
                    <p>&copy; {{ date('Y') }} TeaManjur. All rights reserved.</p>
                    <p class="mt-2">
                        Website Design &amp; Development Partner:
                        <a class="font-semibold text-orange-300 transition hover:text-orange-200" href="https://aiwebdev.in/" target="_blank" rel="noopener">TECHNOLOGY AI WEB DEVELOPMENT</a>
                    </p>
                </div>
            </footer>

            @if ($promotionalPopup)
                <div class="fixed inset-0 z-[80] hidden items-center justify-center bg-slate-950/75 px-5 py-8 backdrop-blur-sm" data-promotional-popup aria-hidden="true">
                    <div class="relative grid w-full max-w-4xl overflow-hidden rounded-lg border border-white/10 bg-white text-slate-950 shadow-2xl shadow-slate-950/40 md:grid-cols-[0.92fr_1.08fr]">
                        <button type="button" class="absolute right-4 top-4 z-10 flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-xl font-semibold text-slate-600 shadow-sm transition hover:border-orange-300 hover:text-orange-700" data-promotional-popup-close aria-label="Close promotional popup">
                            &times;
                        </button>

                        <div class="hidden bg-slate-950 p-5 md:flex md:min-h-[28rem] md:items-center md:justify-center">
                            @if ($promotionalPopup->image)
                                <img src="{{ asset('storage/' . $promotionalPopup->image) }}" alt="{{ $promotionalPopup->title }}" class="max-h-[26rem] w-full rounded-md object-contain">
                            @else
                                <div class="flex h-full min-h-[24rem] w-full items-center justify-center rounded-md bg-[linear-gradient(135deg,#020617_0%,#0f766e_55%,#f97316_100%)] p-8">
                                    <img src="{{ asset('assets/logo-teamanjur-orange.png') }}" alt="TeaManjur logo" class="h-24 w-24 object-contain">
                                </div>
                            @endif
                        </div>

                        <div class="p-7 sm:p-10">
                            @if ($promotionalPopup->eyebrow)
                                <p class="text-sm font-semibold uppercase tracking-wide text-orange-600">{{ $promotionalPopup->eyebrow }}</p>
                            @endif

                            <h2 class="mt-4 max-w-xl text-3xl font-semibold leading-tight text-slate-950 sm:text-4xl">{{ $promotionalPopup->title }}</h2>

                            @if ($promotionalPopup->body)
                                <p class="mt-5 text-base leading-7 text-slate-600">{{ $promotionalPopup->body }}</p>
                            @endif

                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                @if ($promotionalPopup->button_label && $promotionalPopup->button_url)
                                    <a class="btn-primary" href="{{ $promotionalPopup->button_url }}">{{ $promotionalPopup->button_label }}</a>
                                @endif

                                <button type="button" class="inline-flex items-center justify-center rounded-md border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-orange-300 hover:text-orange-700" data-promotional-popup-close>
                                    Maybe later
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </body>
</html>
