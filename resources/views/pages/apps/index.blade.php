@extends('layouts.frontend')

@section('title', 'Apple App Store Apps')

@section('content')
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_78%_24%,rgba(249,115,22,0.22),transparent_32%),radial-gradient(circle_at_18%_20%,rgba(6,182,212,0.16),transparent_30%)]"></div>

        <div class="relative mx-auto grid max-w-7xl gap-12 px-5 py-16 lg:grid-cols-[0.9fr_1.1fr] lg:px-8 lg:py-20">
            <div class="flex flex-col justify-center">
                <p class="eyebrow">TeaManjur Apps</p>
                <h1 class="mt-5 max-w-4xl text-4xl font-semibold leading-tight text-white md:text-6xl">Privacy-first iOS apps built for everyday productivity.</h1>
                <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-300">Explore TeaManjur app experiences for signing PDFs, reading documents, creating QR tools, announcements, and focused AI-assisted workflows.</p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a class="btn-primary" href="#app-list">Browse apps</a>
                    <a class="btn-secondary" href="{{ route('privacy-policy') }}">Privacy promise</a>
                </div>

                <div class="mt-10 grid max-w-xl grid-cols-3 gap-3">
                    <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                        <p class="text-2xl font-semibold text-white">{{ $apps->count() }}</p>
                        <p class="mt-1 text-xs font-medium uppercase tracking-wide text-slate-300">Published apps</p>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                        <p class="text-2xl font-semibold text-white">0</p>
                        <p class="mt-1 text-xs font-medium uppercase tracking-wide text-slate-300">Data collected</p>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                        <p class="text-2xl font-semibold text-white">iOS</p>
                        <p class="mt-1 text-xs font-medium uppercase tracking-wide text-slate-300">App focus</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-end">
                <div class="w-full max-w-2xl">
                    <div class="rounded-3xl border border-white/10 bg-white/10 p-4 shadow-2xl shadow-black/30 backdrop-blur">
                        <div class="mb-4 flex items-end justify-between gap-4">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-orange-200">Featured apps gallery</p>
                                <h2 class="mt-1 text-xl font-semibold text-white">Featured TeaManjur apps</h2>
                            </div>
                            <span class="rounded-full border border-white/10 bg-slate-950/60 px-3 py-1 text-xs font-semibold text-slate-300">{{ $featuredApps->count() }} apps</span>
                        </div>

                        <div class="grid max-h-[34rem] grid-cols-2 gap-3 overflow-y-auto pr-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                            @forelse ($featuredApps as $heroApp)
                                <a href="{{ route('apps.show', $heroApp->slug) }}" class="group overflow-hidden rounded-2xl border border-white/10 bg-slate-950/65 transition hover:-translate-y-0.5 hover:border-orange-300/70 hover:bg-slate-900">
                                    <div class="flex aspect-[4/3] items-center justify-center bg-slate-900 p-3">
                                        @if ($heroApp->hero_image)
                                            <img src="{{ asset('storage/' . $heroApp->hero_image) }}" alt="{{ $heroApp->name }} hero image" class="h-full w-full object-contain transition duration-300 group-hover:scale-[1.03]">
                                        @elseif ($heroApp->icon)
                                            <img src="{{ asset('storage/' . $heroApp->icon) }}" alt="{{ $heroApp->name }} icon" class="h-20 w-20 rounded-2xl object-cover transition duration-300 group-hover:scale-105">
                                        @else
                                            <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-orange-500 text-2xl font-semibold text-white">
                                                {{ str($heroApp->name)->substr(0, 1)->upper() }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="border-t border-white/10 p-3">
                                        <div class="flex min-w-0 items-center gap-3">
                                            @if ($heroApp->icon)
                                                <img src="{{ asset('storage/' . $heroApp->icon) }}" alt="{{ $heroApp->name }} icon" class="h-9 w-9 shrink-0 rounded-lg object-cover">
                                            @else
                                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-orange-500 text-sm font-semibold text-white">
                                                    {{ str($heroApp->name)->substr(0, 1)->upper() }}
                                                </div>
                                            @endif

                                            <span class="min-w-0">
                                                <span class="block truncate text-sm font-semibold text-white">{{ $heroApp->name }}</span>
                                                <span class="mt-0.5 block truncate text-xs text-cyan-100">{{ $heroApp->appCategory?->name ?? 'TeaManjur App' }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <div class="rounded-2xl border border-white/10 bg-slate-950/55 p-5 text-sm text-slate-300">Apps are coming soon.</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="app-list" class="content-band">
        <div>
            @if ($apps->isEmpty())
                <div class="rounded-lg border border-slate-200 bg-slate-50 p-8 text-center">
                    <h2 class="text-xl font-semibold text-slate-950">Apps are coming soon.</h2>
                    <p class="mt-3 text-slate-600">TeaManjur App Store listings will appear here once they are published.</p>
                </div>
            @else
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($apps as $app)
                        <article class="surface-card flex flex-col">
                            <div class="flex items-start gap-4">
                                @if ($app->icon)
                                    <img src="{{ asset('storage/' . $app->icon) }}" alt="{{ $app->name }} icon" class="h-16 w-16 rounded-lg object-cover">
                                @else
                                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-lg bg-orange-100 text-xl font-semibold text-orange-700">
                                        {{ str($app->name)->substr(0, 1)->upper() }}
                                    </div>
                                @endif

                                <div>
                                    <p class="text-sm font-semibold uppercase tracking-wide text-cyan-700">{{ $app->appCategory?->name ?? 'TeaManjur App' }}</p>
                                    <h2 class="mt-2 card-title">{{ $app->name }}</h2>
                                </div>
                            </div>

                            <p class="card-copy">{{ $app->tagline ?: $app->short_description }}</p>

                            @if ($app->short_description)
                                <p class="mt-3 text-sm leading-6 text-slate-500">{{ $app->short_description }}</p>
                            @endif

                            <a class="mt-6 inline-flex text-sm font-semibold text-cyan-700 hover:text-cyan-900" href="{{ route('apps.show', $app->slug) }}">View app details</a>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
