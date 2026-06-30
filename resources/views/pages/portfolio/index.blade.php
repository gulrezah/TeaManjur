@extends('layouts.frontend')

@section('title', 'Portfolio')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">Portfolio</p>
        <h1 class="page-title">Case studies and project stories will live here.</h1>
        <p class="page-copy">For Phase 1 this page is static. Later it will connect to the Projects / Portfolio admin module and show published TeaManjur work.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ([
                ['Company Website', 'A refined business website with service pages, contact flow, and SEO-ready structure.'],
                ['AI Workflow Tool', 'An internal assistant concept for summarizing requests and preparing faster responses.'],
                ['Laravel Dashboard', 'A business admin system concept with content, leads, and reporting in one place.'],
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
