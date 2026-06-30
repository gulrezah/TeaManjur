<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <div class="min-h-screen bg-[radial-gradient(circle_at_top_left,#164e63_0,#0f172a_34%,#020617_72%)]">
            <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/85 backdrop-blur">
                <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8" aria-label="Main navigation">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <img src="{{ asset('assets/logo-teamanjur-orange.png') }}" alt="TeaManjur logo" class="h-12 w-12 object-contain">
                        <span>
                            <span class="block text-base font-semibold leading-tight text-white">TeaManjur</span>
                            <span class="block text-xs text-cyan-200">Digital solutions studio</span>
                        </span>
                    </a>

                    <div class="hidden items-center gap-7 text-sm font-medium text-slate-200 lg:flex">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                        <a class="nav-link" href="{{ route('ai-solutions') }}">AI Solutions</a>
                        <a class="nav-link" href="{{ route('web-development') }}">Web Development</a>
                        <a class="nav-link" href="{{ route('portfolio.index') }}">Portfolio</a>
                        <a class="nav-link" href="{{ route('apps.index') }}">Apps</a>
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                        <a class="rounded-md bg-cyan-400 px-4 py-2 font-semibold text-slate-950 transition hover:bg-cyan-300" href="{{ route('contact') }}">Contact</a>
                    </div>

                    <details class="relative lg:hidden">
                        <summary class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded-md border border-white/15 text-white marker:hidden">
                            <span class="sr-only">Open menu</span>
                            <span class="text-xl leading-none">=</span>
                        </summary>
                        <div class="absolute right-0 mt-3 w-72 rounded-lg border border-white/10 bg-slate-900 p-3 shadow-2xl">
                            <a class="mobile-nav-link" href="{{ route('about') }}">About</a>
                            <a class="mobile-nav-link" href="{{ route('services') }}">Services</a>
                            <a class="mobile-nav-link" href="{{ route('ai-solutions') }}">AI Solutions</a>
                            <a class="mobile-nav-link" href="{{ route('web-development') }}">Web Development</a>
                            <a class="mobile-nav-link" href="{{ route('portfolio.index') }}">Portfolio</a>
                            <a class="mobile-nav-link" href="{{ route('apps.index') }}">Apps</a>
                            <a class="mobile-nav-link" href="{{ route('blog.index') }}">Blog</a>
                            <a class="mt-2 block rounded-md bg-cyan-400 px-4 py-3 text-center text-sm font-semibold text-slate-950" href="{{ route('contact') }}">Contact</a>
                        </div>
                    </details>
                </nav>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="border-t border-white/10 bg-slate-950">
                <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 md:grid-cols-[1.2fr_1fr_1fr] lg:px-8">
                    <div>
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/logo-teamanjur-orange.png') }}" alt="TeaManjur logo" class="h-12 w-12 object-contain">
                            <span class="text-lg font-semibold text-white">TeaManjur</span>
                        </div>
                        <p class="mt-4 max-w-md text-sm leading-6 text-slate-400">Modern web development, AI integration, Laravel solutions, business automation, and mobile app promotion for teams ready to move faster.</p>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold uppercase tracking-wide text-cyan-200">Company</h2>
                        <div class="mt-4 grid gap-3 text-sm text-slate-400">
                            <a class="hover:text-white" href="{{ route('about') }}">About</a>
                            <a class="hover:text-white" href="{{ route('portfolio.index') }}">Portfolio</a>
                            <a class="hover:text-white" href="{{ route('blog.index') }}">Blog</a>
                            <a class="hover:text-white" href="{{ route('contact') }}">Contact</a>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold uppercase tracking-wide text-cyan-200">Solutions</h2>
                        <div class="mt-4 grid gap-3 text-sm text-slate-400">
                            <a class="hover:text-white" href="{{ route('services') }}">Services</a>
                            <a class="hover:text-white" href="{{ route('ai-solutions') }}">AI Integration</a>
                            <a class="hover:text-white" href="{{ route('web-development') }}">Laravel Development</a>
                            <a class="hover:text-white" href="{{ route('apps.index') }}">Apple App Store Apps</a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-slate-500">
                    &copy; {{ date('Y') }} TeaManjur. All rights reserved.
                </div>
            </footer>
        </div>
    </body>
</html>
