@extends('layouts.frontend')

@section('title', 'Web Development, AI Integration, Laravel Solutions, and Apps')

@section('content')
    <section class="relative overflow-hidden bg-slate-950" data-hero-slider tabindex="0">
        @php
            $heroSlides = [
                [
                    'eyebrow' => 'TeaManjur Digital Solutions',
                    'title' => 'Build a sharper digital business with TeaManjur.',
                    'copy' => 'Professional websites, Laravel applications, AI workflows, automation, and app promotion built for companies that want dependable execution.',
                    'primary' => ['label' => 'Start a project', 'route' => 'contact'],
                    'secondary' => ['label' => 'Explore services', 'route' => 'services'],
                    'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1800&q=80',
                    'metric' => 'Web + AI + Apps',
                ],
                [
                    'eyebrow' => 'Web Development',
                    'title' => 'Modern Laravel websites designed for trust and growth.',
                    'copy' => 'From polished company pages to scalable Laravel foundations, TeaManjur turns your digital presence into a clear client acquisition channel.',
                    'primary' => ['label' => 'See web development', 'route' => 'web-development'],
                    'secondary' => ['label' => 'View portfolio', 'route' => 'portfolio.index'],
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1800&q=80',
                    'metric' => 'Laravel-first',
                ],
                [
                    'eyebrow' => 'AI Integration',
                    'title' => 'Practical AI workflows that make operations faster.',
                    'copy' => 'Add smart intake, content assistance, support workflows, summaries, and business automation without making the experience complicated.',
                    'primary' => ['label' => 'Explore AI solutions', 'route' => 'ai-solutions'],
                    'secondary' => ['label' => 'Talk to us', 'route' => 'contact'],
                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1800&q=80',
                    'metric' => 'AI-ready',
                ],
                [
                    'eyebrow' => 'Business Automation',
                    'title' => 'Automate repeated work and give your team cleaner systems.',
                    'copy' => 'TeaManjur helps shape lead handling, reporting, dashboards, internal workflows, and admin-ready systems around real business needs.',
                    'primary' => ['label' => 'View services', 'route' => 'services'],
                    'secondary' => ['label' => 'Start planning', 'route' => 'contact'],
                    'image' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1800&q=80',
                    'metric' => 'Automation',
                ],
                [
                    'eyebrow' => 'Apple App Store Apps',
                    'title' => 'Promote TeaManjur apps with polished product pages.',
                    'copy' => 'Create a professional home for every iOS app with feature highlights, support messaging, screenshots, and App Store calls to action.',
                    'primary' => ['label' => 'Explore apps', 'route' => 'apps.index'],
                    'secondary' => ['label' => 'Contact TeaManjur', 'route' => 'contact'],
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1800&q=80',
                    'metric' => 'iOS Promotion',
                ],
            ];
        @endphp

        <div class="relative min-h-[calc(100vh-4.5rem)] overflow-hidden md:min-h-[720px]">
            @foreach ($heroSlides as $index => $slide)
                <article
                    class="hero-slide {{ $index === 0 ? 'hero-slide-active' : '' }}"
                    data-hero-slide
                    aria-hidden="{{ $index === 0 ? 'false' : 'true' }}"
                >
                    <img
                        src="{{ $slide['image'] }}"
                        alt="{{ $slide['eyebrow'] }}"
                        class="absolute inset-0 h-full w-full object-cover"
                        loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                    >
                    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(2,6,23,0.94)_0%,rgba(15,23,42,0.78)_48%,rgba(15,23,42,0.38)_100%)]"></div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(249,115,22,0.26),transparent_34%)]"></div>

                    <div class="site-container relative z-10 flex min-h-[calc(100vh-4.5rem)] items-center py-20 md:min-h-[720px]">
                        <div class="max-w-3xl">
                            <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-2 text-xs font-semibold uppercase tracking-wide text-orange-100 shadow-sm backdrop-blur">
                                <span class="h-2 w-2 rounded-full bg-orange-400"></span>
                                {{ $slide['eyebrow'] }}
                            </div>
                            <h1 class="mt-6 text-4xl font-semibold leading-tight text-white md:text-6xl lg:text-7xl">{{ $slide['title'] }}</h1>
                            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">{{ $slide['copy'] }}</p>
                            <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                                <a class="btn-primary" href="{{ route($slide['primary']['route']) }}">{{ $slide['primary']['label'] }}</a>
                                <a class="btn-secondary" href="{{ route($slide['secondary']['route']) }}">{{ $slide['secondary']['label'] }}</a>
                            </div>
                            <div class="mt-10 grid max-w-2xl grid-cols-3 gap-3">
                                <div class="hero-stat">
                                    <span class="block text-lg font-semibold text-white sm:text-2xl">5</span>
                                    <span class="mt-1 block text-xs uppercase tracking-wide text-slate-300">Core offers</span>
                                </div>
                                <div class="hero-stat">
                                    <span class="block text-lg font-semibold text-white sm:text-2xl">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <span class="mt-1 block text-xs uppercase tracking-wide text-slate-300">Featured slide</span>
                                </div>
                                <div class="hero-stat">
                                    <span class="block break-words text-lg font-semibold text-white sm:text-2xl">{{ $slide['metric'] }}</span>
                                    <span class="mt-1 block text-xs uppercase tracking-wide text-slate-300">Focus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach

            <div class="pointer-events-none absolute inset-x-0 bottom-8 z-20">
                <div class="site-container flex items-center justify-between gap-4">
                    <div class="pointer-events-auto flex items-center gap-2" data-hero-dots aria-label="Hero slider pagination">
                        @foreach ($heroSlides as $index => $slide)
                            <button
                                type="button"
                                class="hero-dot {{ $index === 0 ? 'hero-dot-active' : '' }}"
                                data-hero-dot="{{ $index }}"
                                aria-label="Show slide {{ $index + 1 }}"
                                aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                            ></button>
                        @endforeach
                    </div>
                    <div class="pointer-events-auto flex items-center gap-3">
                        <button type="button" class="hero-arrow" data-hero-prev aria-label="Previous slide">
                            <span aria-hidden="true">&larr;</span>
                        </button>
                        <button type="button" class="hero-arrow" data-hero-next aria-label="Next slide">
                            <span aria-hidden="true">&rarr;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-white">
        <div class="site-container">
            <div class="section-heading">
                <p class="section-eyebrow">Services Preview</p>
                <h2 class="section-title">Everything a modern IT company website should communicate clearly.</h2>
                <p class="section-copy">TeaManjur brings together technical execution and business clarity, so clients can understand what you do and take action quickly.</p>
            </div>
            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ([
                    ['Web Development', 'Professional websites, landing pages, and content structures for growing companies.', '01'],
                    ['AI Integration', 'Smart assistants, intake flows, and workflow helpers that reduce manual effort.', '02'],
                    ['Laravel Solutions', 'Custom apps, admin-ready systems, dashboards, APIs, and maintainable backends.', '03'],
                    ['Business Automation', 'Lead handling, reporting, operational tasks, and repeatable process automation.', '04'],
                ] as [$title, $copy, $number])
                    <article class="premium-card">
                        <p class="text-sm font-semibold text-orange-600">{{ $number }}</p>
                        <h3 class="mt-5 text-xl font-semibold text-slate-950">{{ $title }}</h3>
                        <p class="mt-3 leading-7 text-slate-600">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-tint">
        <div class="site-container grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:items-center">
            <div>
                <p class="section-eyebrow">AI Integration</p>
                <h2 class="section-title">Add AI where it makes the business easier to run.</h2>
                <p class="section-copy">From lead qualification to internal knowledge workflows, we shape AI features around practical outcomes instead of novelty.</p>
                <a class="mt-7 inline-flex text-sm font-semibold text-orange-700 hover:text-orange-900" href="{{ route('ai-solutions') }}">Explore AI solutions</a>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach (['Support assistants', 'Lead scoring', 'Content workflows', 'Knowledge search', 'Report summaries', 'Smart intake forms'] as $item)
                    <div class="feature-tile">{{ $item }}</div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="site-container grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
            <div class="order-2 lg:order-1">
                <div class="grid gap-4">
                    @foreach ([
                        ['Responsive Blade UI', 'Fast pages with maintainable Tailwind components.'],
                        ['Filament-ready content', 'Frontend sections designed to connect with admin modules later.'],
                        ['Laravel foundations', 'Routes, controllers, views, and future database models kept clean.'],
                    ] as [$title, $copy])
                        <div class="rounded-md border border-white/10 bg-white/5 p-5">
                            <h3 class="font-semibold text-white">{{ $title }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">{{ $copy }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <p class="section-eyebrow">Web Development</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-normal text-white md:text-5xl">Laravel websites built for growth, not just launch day.</h2>
                <p class="mt-5 text-lg leading-8 text-slate-300">TeaManjur uses a simple, scalable Laravel structure so today's static pages can become tomorrow's CMS-driven website, app catalog, blog, and portfolio.</p>
                <a class="mt-7 inline-flex text-sm font-semibold text-orange-300 hover:text-orange-200" href="{{ route('web-development') }}">See web development</a>
            </div>
        </div>
    </section>

    <section class="section-white">
        <div class="site-container grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
            <div>
                <p class="section-eyebrow">Apple App Store Apps</p>
                <h2 class="section-title">A dedicated promotion hub for TeaManjur apps.</h2>
                <p class="section-copy">Showcase each iOS app with a polished listing, feature highlights, support context, and App Store-ready messaging.</p>
                <a class="btn-primary mt-7" href="{{ route('apps.index') }}">Visit apps section</a>
            </div>
            <div class="grid gap-5 sm:grid-cols-3">
                @foreach ([
                    ['Tenvir', 'Productivity'],
                    ['Kids Learning App', 'Education'],
                    ['Business Utility App', 'Business'],
                ] as [$name, $type])
                    <article class="rounded-lg border border-slate-200 bg-slate-50 p-5 shadow-sm">
                        <div class="flex h-14 w-14 items-center justify-center rounded-lg bg-orange-100 text-lg font-semibold text-orange-700">{{ substr($name, 0, 1) }}</div>
                        <h3 class="mt-5 font-semibold text-slate-950">{{ $name }}</h3>
                        <p class="mt-2 text-sm text-slate-500">{{ $type }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-tint">
        <div class="site-container">
            <div class="section-heading">
                <p class="section-eyebrow">Portfolio Preview</p>
                <h2 class="section-title">Case studies that explain the business result.</h2>
                <p class="section-copy">This preview stays static for now and will later connect to the Projects / Portfolio module.</p>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ([
                    ['Company Website', 'A polished services site with a fast contact path and clear brand positioning.'],
                    ['AI Workflow Tool', 'A practical assistant concept for summarizing requests and routing leads.'],
                    ['Laravel Dashboard', 'A business control panel concept for content, leads, apps, and reporting.'],
                ] as [$title, $copy])
                    <article class="premium-card">
                        <p class="text-sm font-semibold uppercase tracking-wide text-cyan-700">Case study</p>
                        <h3 class="mt-4 text-xl font-semibold text-slate-950">{{ $title }}</h3>
                        <p class="mt-3 leading-7 text-slate-600">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-white">
        <div class="site-container grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <p class="section-eyebrow">Why Choose TeaManjur</p>
                <h2 class="section-title">A premium digital presence with an engineering backbone.</h2>
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
                @foreach ([
                    ['Business-first thinking', 'Every section, route, and feature supports client trust and conversion.'],
                    ['AI-ready structure', 'Pages and workflows are designed for future automation and smart features.'],
                    ['Laravel discipline', 'A maintainable foundation that can grow into admin-managed content.'],
                    ['App promotion built in', 'TeaManjur.com can support company services and App Store products together.'],
                ] as [$title, $copy])
                    <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                        <h3 class="font-semibold text-slate-950">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">{{ $copy }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="site-container">
            <div class="section-heading">
                <p class="section-eyebrow">Testimonials Preview</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-normal text-white md:text-5xl">Built for the kind of clients who value clarity.</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ([
                    ['TeaManjur made our service offering feel sharper and easier to understand.', 'Founder, Digital Services'],
                    ['The Laravel-first approach gave us confidence that the website can grow with our operations.', 'Operations Lead'],
                    ['The app promotion flow gives every product a polished home before users reach the App Store.', 'Product Owner'],
                ] as [$quote, $name])
                    <figure class="rounded-lg border border-white/10 bg-white/5 p-6">
                        <blockquote class="leading-7 text-slate-300">"{{ $quote }}"</blockquote>
                        <figcaption class="mt-5 text-sm font-semibold text-orange-200">{{ $name }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white px-5 py-16 text-slate-950 lg:px-8">
        <div class="mx-auto max-w-7xl rounded-lg bg-[linear-gradient(135deg,#0f172a_0%,#164e63_58%,#f97316_100%)] p-8 text-white shadow-2xl shadow-slate-300/60 md:p-12">
            <div class="grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wide text-orange-100">Ready when you are</p>
                    <h2 class="mt-4 max-w-3xl text-3xl font-semibold tracking-normal md:text-5xl">Let's shape TeaManjur into a serious digital company website.</h2>
                    <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-100">Start with a professional public presence now, then connect services, projects, apps, blog posts, testimonials, FAQs, and leads through Filament in the next phases.</p>
                </div>
                <a class="inline-flex items-center justify-center rounded-md bg-white px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-orange-50" href="{{ route('contact') }}">Start a conversation</a>
            </div>
        </div>
    </section>
@endsection
