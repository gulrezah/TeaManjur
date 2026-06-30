@extends('layouts.frontend')

@section('title', 'Services')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">Services</p>
        <h1 class="page-title">Digital services for companies that need reliable execution.</h1>
        <p class="page-copy">TeaManjur covers the core pieces of a modern web presence: strategy, design, multi-technology web development, AI workflow integration, automation, and mobile app promotion.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['Web Development', 'Responsive business websites, landing pages, and content-rich company pages.'],
                ['AI Integration', 'AI-assisted workflows, content helpers, chat experiences, and internal tools.'],
                ['Web App Solutions', 'Custom web applications, admin panels, APIs, and maintainable backend systems.'],
                ['Business Automation', 'Process automation for leads, reporting, operations, and repetitive admin work.'],
                ['Mobile App Promotion', 'Dedicated pages for iOS apps with features, screenshots, and App Store messaging.'],
                ['Digital Consulting', 'Planning and technical guidance for new platforms, upgrades, and product launches.'],
            ] as [$title, $copy])
                <div class="surface-card">
                    <h2 class="card-title">{{ $title }}</h2>
                    <p class="card-copy">{{ $copy }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
