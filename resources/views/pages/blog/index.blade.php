@extends('layouts.frontend')

@section('title', 'Blog')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">Blog</p>
        <h1 class="page-title">Notes on web development, AI, apps, and digital operations.</h1>
        <p class="page-copy">The blog is static for now. Later it will connect to Blog Categories and Blog Posts in Filament.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ([
                ['How modern web stacks fit growing business websites', 'A practical look at choosing the right technologies for content, admin, and workflow-heavy sites.'],
                ['Where to start with AI integration', 'Simple ways to identify AI opportunities that are useful instead of distracting.'],
                ['Preparing an app promotion page', 'The core pieces every App Store app page should include before launch.'],
            ] as [$title, $copy])
                <article class="surface-card">
                    <p class="text-sm text-slate-500">Sample article</p>
                    <h2 class="mt-3 card-title">{{ $title }}</h2>
                    <p class="card-copy">{{ $copy }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
