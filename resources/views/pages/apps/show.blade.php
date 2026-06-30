@extends('layouts.frontend')

@section('title', $app->seo_title ?: $app->name)

@section('content')
    @php
        $categoryName = $app->appCategory?->name ?? 'TeaManjur App';
        $heroImage = $app->hero_image ? asset('storage/' . $app->hero_image) : null;
        $iconImage = $app->icon ? asset('storage/' . $app->icon) : null;
        $screenshots = $app->appScreenshots;
    @endphp

    <section class="relative overflow-hidden bg-slate-950 text-white">
        @if ($heroImage)
            <img src="{{ $heroImage }}" alt="{{ $app->name }} hero image" class="absolute inset-0 h-full w-full object-cover opacity-20">
        @endif

        <div class="absolute inset-0 bg-slate-950/80"></div>

        <div class="relative mx-auto grid max-w-7xl gap-12 px-5 py-16 lg:grid-cols-[0.9fr_1.1fr] lg:px-8 lg:py-20">
            <div class="flex flex-col justify-center">
                <div class="flex items-center gap-4">
                    @if ($iconImage)
                        <img src="{{ $iconImage }}" alt="{{ $app->name }} icon" class="h-20 w-20 rounded-2xl object-cover shadow-2xl shadow-black/30">
                    @else
                        <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-orange-500 text-3xl font-semibold text-white shadow-2xl shadow-black/30">
                            {{ str($app->name)->substr(0, 1)->upper() }}
                        </div>
                    @endif

                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wide text-orange-200">{{ $categoryName }}</p>
                        <p class="mt-1 text-sm text-slate-300">TeaManjur Apps</p>
                    </div>
                </div>

                <h1 class="mt-8 max-w-4xl text-4xl font-semibold leading-tight text-white md:text-6xl">{{ $app->name }}</h1>

                @if ($app->tagline)
                    <p class="mt-5 max-w-2xl text-xl leading-8 text-cyan-100">{{ $app->tagline }}</p>
                @endif

                @if ($app->short_description)
                    <p class="mt-5 max-w-3xl text-base leading-7 text-slate-300">{{ $app->short_description }}</p>
                @endif

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    @if ($app->app_store_url)
                        <a class="btn-primary gap-2.5" href="{{ $app->app_store_url }}" target="_blank" rel="noopener">
                            <svg class="shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M17.05 12.32c-.03-2.36 1.93-3.49 2.02-3.54-1.1-1.61-2.81-1.83-3.41-1.86-1.45-.15-2.83.85-3.56.85-.74 0-1.88-.83-3.09-.81-1.59.02-3.06.92-3.88 2.35-1.66 2.88-.43 7.14 1.19 9.47.79 1.14 1.73 2.42 2.96 2.37 1.19-.05 1.64-.77 3.08-.77s1.84.77 3.1.75c1.28-.03 2.09-1.16 2.87-2.31.91-1.33 1.28-2.62 1.3-2.69-.03-.01-2.55-.98-2.58-3.81ZM14.71 5.39c.65-.79 1.09-1.89.97-2.99-.94.04-2.08.63-2.76 1.41-.61.7-1.14 1.82-1 2.89 1.05.08 2.13-.53 2.79-1.31Z" />
                            </svg>
                            <span class="whitespace-nowrap">View on App Store</span>
                        </a>
                    @endif

                    @if ($app->support_url)
                        <a class="btn-secondary" href="{{ $app->support_url }}" target="_blank" rel="noopener">Get support</a>
                    @endif
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-end">
                <div class="w-full max-w-md">
                    <div class="rounded-3xl border border-white/10 bg-white/10 p-3 shadow-2xl shadow-black/30 backdrop-blur">
                        <div class="flex aspect-[4/5] items-center justify-center overflow-hidden rounded-2xl bg-slate-900/80 p-5">
                            @if ($heroImage)
                                <img src="{{ $heroImage }}" alt="{{ $app->name }} preview" class="max-h-full max-w-full object-contain">
                            @elseif ($screenshots->isNotEmpty())
                                <img src="{{ asset('storage/' . $screenshots->first()->image) }}" alt="{{ $screenshots->first()->title ?: $app->name . ' screenshot' }}" class="max-h-full max-w-full object-contain">
                            @else
                                <div class="flex h-full items-center justify-center p-8 text-center">
                                    <div>
                                        @if ($iconImage)
                                            <img src="{{ $iconImage }}" alt="{{ $app->name }} icon" class="mx-auto h-24 w-24 rounded-2xl object-cover">
                                        @endif
                                        <p class="mt-5 text-lg font-semibold text-white">{{ $app->name }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-5 py-14 text-slate-950 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-8 lg:grid-cols-[0.72fr_0.28fr]">
            <div class="space-y-8">
                <section>
                    <p class="section-eyebrow">Overview</p>
                    <h2 class="mt-3 text-3xl font-semibold tracking-normal text-slate-950">Built for focused, reliable app workflows.</h2>

                    @if ($app->description)
                        <div class="mt-5 space-y-4 leading-8 text-slate-600 [&_a]:font-semibold [&_a]:text-cyan-700 [&_li]:ml-5 [&_ol]:list-decimal [&_p]:mt-3 [&_strong]:text-slate-950 [&_ul]:list-disc">
                            {!! $app->description !!}
                        </div>
                    @elseif ($app->short_description)
                        <p class="mt-5 leading-8 text-slate-600">{{ $app->short_description }}</p>
                    @endif
                </section>

                @if ($app->features_content)
                    <section class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                        <p class="section-eyebrow">Features</p>
                        <h2 class="mt-3 text-2xl font-semibold text-slate-950">What this app helps you do</h2>
                        <div class="mt-5 space-y-4 leading-8 text-slate-600 [&_a]:font-semibold [&_a]:text-cyan-700 [&_li]:ml-5 [&_ol]:list-decimal [&_p]:mt-3 [&_strong]:text-slate-950 [&_ul]:list-disc">
                            {!! $app->features_content !!}
                        </div>
                    </section>
                @endif

                @if ($app->why_choose_content)
                    <section class="rounded-lg border border-orange-100 bg-orange-50 p-6">
                        <p class="section-eyebrow">Why choose</p>
                        <h2 class="mt-3 text-2xl font-semibold text-slate-950">Why choose {{ $app->name }}</h2>
                        <div class="mt-5 space-y-4 leading-8 text-slate-700 [&_a]:font-semibold [&_a]:text-cyan-700 [&_li]:ml-5 [&_ol]:list-decimal [&_p]:mt-3 [&_strong]:text-slate-950 [&_ul]:list-disc">
                            {!! $app->why_choose_content !!}
                        </div>
                    </section>
                @endif
            </div>

            <aside class="lg:sticky lg:top-24 lg:self-start">
                <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex items-center gap-4">
                        @if ($iconImage)
                            <img src="{{ $iconImage }}" alt="{{ $app->name }} icon" class="h-16 w-16 rounded-xl object-cover">
                        @else
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-orange-100 text-xl font-semibold text-orange-700">
                                {{ str($app->name)->substr(0, 1)->upper() }}
                            </div>
                        @endif

                        <div>
                            <h2 class="font-semibold text-slate-950">{{ $app->name }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ $categoryName }}</p>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-3 text-sm">
                        @if ($app->tagline)
                            <div class="rounded-md bg-slate-50 p-3">
                                <p class="font-semibold text-slate-950">Use</p>
                                <p class="mt-1 text-slate-600">{{ $app->tagline }}</p>
                            </div>
                        @endif

                        <div class="rounded-md bg-slate-50 p-3">
                            <p class="font-semibold text-slate-950">Category</p>
                            <p class="mt-1 text-slate-600">{{ $categoryName }}</p>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-3">
                        @if ($app->app_store_url)
                            <a class="btn-primary w-full gap-2.5" href="{{ $app->app_store_url }}" target="_blank" rel="noopener">
                                <svg class="shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M17.05 12.32c-.03-2.36 1.93-3.49 2.02-3.54-1.1-1.61-2.81-1.83-3.41-1.86-1.45-.15-2.83.85-3.56.85-.74 0-1.88-.83-3.09-.81-1.59.02-3.06.92-3.88 2.35-1.66 2.88-.43 7.14 1.19 9.47.79 1.14 1.73 2.42 2.96 2.37 1.19-.05 1.64-.77 3.08-.77s1.84.77 3.1.75c1.28-.03 2.09-1.16 2.87-2.31.91-1.33 1.28-2.62 1.3-2.69-.03-.01-2.55-.98-2.58-3.81ZM14.71 5.39c.65-.79 1.09-1.89.97-2.99-.94.04-2.08.63-2.76 1.41-.61.7-1.14 1.82-1 2.89 1.05.08 2.13-.53 2.79-1.31Z" />
                                </svg>
                                <span class="whitespace-nowrap">View on App Store</span>
                            </a>
                        @endif

                        @if ($app->privacy_policy_url)
                            <a class="inline-flex justify-center rounded-md border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-orange-300 hover:text-orange-700" href="{{ $app->privacy_policy_url }}" target="_blank" rel="noopener">Privacy Policy</a>
                        @endif

                        @if ($app->support_url)
                            <a class="inline-flex justify-center rounded-md border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-orange-300 hover:text-orange-700" href="{{ $app->support_url }}" target="_blank" rel="noopener">Support</a>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
    </section>

    @if ($screenshots->isNotEmpty())
        <section class="bg-slate-50 px-5 py-14 text-slate-950 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="section-eyebrow">Screenshots</p>
                        <h2 class="mt-3 text-3xl font-semibold tracking-normal text-slate-950">See {{ $app->name }} in action</h2>
                    </div>
                    <p class="max-w-xl text-sm leading-6 text-slate-600">Browse the most important screens before opening the app store listing.</p>
                </div>

                <div class="mx-auto mt-8 grid max-w-5xl grid-cols-2 gap-4 sm:gap-5 lg:grid-cols-3">
                    @foreach ($screenshots as $screenshot)
                        <figure class="rounded-lg border border-slate-200 bg-white p-3 shadow-sm">
                            @if ($screenshot->title)
                                <figcaption class="mb-3 rounded-md bg-slate-950 px-3 py-2 text-center text-xs font-semibold leading-5 text-white sm:text-sm">{{ $screenshot->title }}</figcaption>
                            @endif

                            <div class="rounded-md bg-slate-100 p-2 sm:p-3">
                                <img src="{{ asset('storage/' . $screenshot->image) }}" alt="{{ $screenshot->title ?: $app->name . ' screenshot' }}" class="mx-auto h-56 w-full rounded-md object-contain sm:h-72 lg:h-80">
                            </div>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($app->version_content)
        <section class="bg-white px-5 py-14 text-slate-950 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="rounded-lg border border-slate-200 bg-slate-950 p-6 text-white lg:p-8">
                    <p class="text-sm font-semibold uppercase tracking-wide text-orange-200">Current version</p>
                    <h2 class="mt-3 text-3xl font-semibold">Latest details for {{ $app->name }}</h2>
                    <div class="mt-6 space-y-4 leading-8 text-slate-200 [&_a]:font-semibold [&_a]:text-cyan-200 [&_li]:ml-5 [&_ol]:list-decimal [&_p]:mt-3 [&_strong]:text-white [&_ul]:list-disc">
                        {!! $app->version_content !!}
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($apps->isNotEmpty())
        <section class="border-y border-slate-200 bg-white px-5 py-5 text-slate-950 lg:px-8">
            <div class="mx-auto max-w-7xl" data-app-carousel>
                <div class="mb-4 flex items-center justify-between gap-4">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-orange-600">TeaManjur apps</p>
                        <h2 class="mt-1 text-lg font-semibold text-slate-950">Explore more apps</h2>
                    </div>

                    <div class="flex items-center gap-2">
                        <button type="button" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-xl font-semibold text-slate-700 shadow-sm transition hover:border-orange-300 hover:text-orange-700" data-app-carousel-prev aria-label="Scroll apps left">
                            &larr;
                        </button>
                        <button type="button" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-xl font-semibold text-slate-700 shadow-sm transition hover:border-orange-300 hover:text-orange-700" data-app-carousel-next aria-label="Scroll apps right">
                            &rarr;
                        </button>
                    </div>
                </div>

                <div class="flex snap-x gap-3 overflow-x-auto scroll-smooth pb-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden" data-app-carousel-track>
                    @foreach ($apps as $carouselApp)
                        @php
                            $isCurrentApp = $carouselApp->is($app);
                        @endphp

                        <a
                            href="{{ route('apps.show', $carouselApp->slug) }}"
                            class="flex min-w-[14rem] snap-start items-center gap-3 rounded-lg border px-4 py-3 transition hover:-translate-y-0.5 hover:shadow-md {{ $isCurrentApp ? 'border-orange-300 bg-orange-50' : 'border-slate-200 bg-slate-50 hover:border-cyan-200 hover:bg-white' }}"
                            aria-current="{{ $isCurrentApp ? 'page' : 'false' }}"
                        >
                            @if ($carouselApp->icon)
                                <img src="{{ asset('storage/' . $carouselApp->icon) }}" alt="{{ $carouselApp->name }} icon" class="h-12 w-12 shrink-0 rounded-xl object-cover">
                            @else
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-orange-100 text-lg font-semibold text-orange-700">
                                    {{ str($carouselApp->name)->substr(0, 1)->upper() }}
                                </div>
                            @endif

                            <span class="min-w-0">
                                <span class="block truncate text-sm font-semibold text-slate-950">{{ $carouselApp->name }}</span>
                                <span class="mt-0.5 block truncate text-xs text-slate-500">{{ $carouselApp->appCategory?->name ?? 'TeaManjur App' }}</span>
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
