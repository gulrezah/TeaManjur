@extends('layouts.frontend')

@section('title', 'Web Development, AI Integration, and Mobile Apps')

@section('content')
    <section class="mx-auto grid max-w-7xl gap-12 px-5 py-20 lg:grid-cols-[1.1fr_0.9fr] lg:px-8 lg:py-28">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-cyan-200">TeaManjur digital solutions studio</p>
            <h1 class="mt-5 max-w-4xl text-4xl font-semibold leading-tight text-white md:text-6xl">Web platforms, AI workflows, and mobile app growth built with calm precision.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">TeaManjur helps businesses launch polished websites, Laravel systems, automation tools, AI integrations, and App Store-ready mobile experiences.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a class="btn-primary" href="{{ route('contact') }}">Start a project</a>
                <a class="btn-secondary" href="{{ route('apps.index') }}">Explore apps</a>
            </div>
        </div>
        <div class="rounded-lg border border-white/10 bg-white/5 p-6 shadow-2xl">
            <div class="grid gap-4">
                @foreach (['Web Development', 'AI Integration', 'Laravel Solutions', 'Business Automation', 'Mobile App Promotion'] as $service)
                    <div class="rounded-md border border-white/10 bg-slate-950/60 p-5">
                        <p class="text-sm font-semibold text-white">{{ $service }}</p>
                        <p class="mt-2 text-sm leading-6 text-slate-400">Strategy, design, engineering, and launch support shaped for measurable business outcomes.</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 text-slate-950">
        <div class="mx-auto grid max-w-7xl gap-6 px-5 md:grid-cols-3 lg:px-8">
            <div class="surface-card">
                <h2 class="text-xl font-semibold">Professional Websites</h2>
                <p class="mt-3 text-slate-600">Fast, responsive websites and marketing pages that make your company feel established from the first click.</p>
            </div>
            <div class="surface-card">
                <h2 class="text-xl font-semibold">AI-Ready Operations</h2>
                <p class="mt-3 text-slate-600">Workflow automations and AI-assisted tools that reduce manual work and improve response speed.</p>
            </div>
            <div class="surface-card">
                <h2 class="text-xl font-semibold">App Store Presence</h2>
                <p class="mt-3 text-slate-600">Dedicated promotion pages for TeaManjur apps, with room for features, screenshots, and support links.</p>
            </div>
        </div>
    </section>
@endsection
