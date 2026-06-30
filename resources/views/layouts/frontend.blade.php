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
    @endphp
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TeaManjur builds modern websites, AI integrations, Laravel systems, business automation, and mobile app experiences.">

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
                            <span class="block text-base font-semibold leading-tight text-white">TeaManjur</span>
                            <span class="block text-xs text-slate-400">Digital solutions studio</span>
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
                        <summary class="flex h-11 w-11 cursor-pointer list-none items-center justify-center rounded-md border border-white/15 bg-white/5 text-white transition hover:border-orange-300/60 hover:bg-white/10 marker:hidden">
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
                        <p class="mt-4 max-w-md text-sm leading-6 text-slate-400">Modern web development, AI integration, Laravel solutions, business automation, and mobile app promotion for teams ready to move faster.</p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="footer-chip">Laravel</span>
                            <span class="footer-chip">AI-ready</span>
                            <span class="footer-chip">App Store</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="footer-heading">Company</h2>
                        <div class="mt-4 grid gap-3 text-sm text-slate-400">
                            <a class="hover:text-white" href="{{ route('about') }}">About</a>
                            <a class="hover:text-white" href="{{ route('portfolio.index') }}">Portfolio</a>
                            <a class="hover:text-white" href="{{ route('blog.index') }}">Blog</a>
                            <a class="hover:text-white" href="{{ route('contact') }}">Contact</a>
                        </div>
                    </div>
                    <div>
                        <h2 class="footer-heading">Solutions</h2>
                        <div class="mt-4 grid gap-3 text-sm text-slate-400">
                            <a class="hover:text-white" href="{{ route('services') }}">Services</a>
                            <a class="hover:text-white" href="{{ route('ai-solutions') }}">AI Integration</a>
                            <a class="hover:text-white" href="{{ route('web-development') }}">Laravel Development</a>
                            <a class="hover:text-white" href="{{ route('apps.index') }}">Apple App Store Apps</a>
                        </div>
                    </div>
                    <div>
                        <h2 class="footer-heading">Project Fit</h2>
                        <p class="mt-4 text-sm leading-6 text-slate-400">Best for companies that need a professional website, custom Laravel workflow, AI-assisted operation, or an app promotion hub.</p>
                        <a class="mt-5 inline-flex text-sm font-semibold text-orange-300 transition hover:text-orange-200" href="{{ route('contact') }}">Discuss your build</a>
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-slate-500">
                    &copy; {{ date('Y') }} TeaManjur. All rights reserved.
                </div>
            </footer>
        </div>
    </body>
</html>
