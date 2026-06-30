@extends('layouts.frontend')

@section('title', 'Portfolio')

@section('content')
    <section class="page-hero grid items-center gap-10 lg:grid-cols-[0.95fr_1.05fr]">
        <div>
            <p class="eyebrow">Portfolio</p>
            <h1 class="page-title">Digital work shaped for growth-focused teams.</h1>
            <p class="page-copy">Explore the kind of polished websites, AI-assisted workflows, app showcases, and business systems TeaManjur builds for modern companies.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a class="btn-primary" href="{{ route('contact') }}">Start a project</a>
                <a class="btn-secondary" href="{{ route('services') }}">View services</a>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-[0.9fr_1.1fr]">
            <div class="overflow-hidden rounded-lg border border-white/10 bg-white/5 shadow-2xl shadow-slate-950/30">
                <img
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=900&q=80"
                    alt="Team reviewing a digital product interface"
                    class="h-72 w-full object-cover sm:h-[26rem]"
                >
            </div>
            <div class="grid gap-4">
                <div class="overflow-hidden rounded-lg border border-white/10 bg-white/5">
                    <img
                        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80"
                        alt="Business analytics dashboard on a laptop"
                        class="h-44 w-full object-cover"
                    >
                </div>
                <div class="rounded-lg border border-white/10 bg-white/10 p-6 backdrop-blur">
                    <p class="text-sm font-semibold uppercase tracking-wide text-orange-200">Project focus</p>
                    <p class="mt-3 text-2xl font-semibold text-white">Web platforms, AI workflows, apps, dashboards, and automation.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-band">
        <div class="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <div>
                <p class="section-eyebrow">Selected directions</p>
                <h2 class="section-title mt-3">Sample work categories</h2>
            </div>
            <p class="max-w-2xl text-base leading-7 text-slate-600">These examples show how TeaManjur can present, automate, and scale digital operations with a clean professional experience.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            @foreach ([
                ['Company Website', 'A refined business website with service pages, contact flow, and SEO-ready structure.'],
                ['AI Workflow Tool', 'An internal assistant concept for summarizing requests and preparing faster responses.'],
                ['Business Dashboard', 'A business admin system concept with content, leads, and reporting in one place.'],
            ] as [$title, $copy])
                <article class="surface-card">
                    <p class="text-sm font-semibold uppercase tracking-wide text-cyan-700">Sample case study</p>
                    <h2 class="mt-3 card-title">{{ $title }}</h2>
                    <p class="card-copy">{{ $copy }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
