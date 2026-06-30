@extends('layouts.frontend')

@section('title', 'Apple App Store Apps')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">TeaManjur Apps</p>
        <h1 class="page-title">Apple App Store apps promoted inside the TeaManjur website.</h1>
        <p class="page-copy">This section gives each TeaManjur app a focused marketing page for features, screenshots, support, and App Store calls to action.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($apps as $app)
                <article class="surface-card">
                    <p class="text-sm font-semibold uppercase tracking-wide text-cyan-700">{{ $app['category'] }}</p>
                    <h2 class="mt-3 card-title">{{ $app['name'] }}</h2>
                    <p class="card-copy">{{ $app['tagline'] }}</p>
                    <a class="mt-6 inline-flex text-sm font-semibold text-cyan-700 hover:text-cyan-900" href="{{ route('apps.show', $app['slug']) }}">View app details</a>
                </article>
            @endforeach
        </div>
    </section>
@endsection
