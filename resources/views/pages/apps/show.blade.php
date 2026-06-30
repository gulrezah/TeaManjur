@extends('layouts.frontend')

@section('title', $app['name'])

@section('content')
    <section class="page-hero">
        <p class="eyebrow">{{ $app['category'] }} App</p>
        <h1 class="page-title">{{ $app['name'] }}</h1>
        <p class="page-copy">{{ $app['description'] }}</p>
        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <a class="btn-primary" href="#">View on App Store</a>
            <a class="btn-secondary" href="{{ route('apps.index') }}">Back to apps</a>
        </div>
    </section>

    <section class="content-band">
        <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <h2 class="section-title">App highlights</h2>
                <p class="mt-4 text-slate-600">{{ $app['tagline'] }}</p>
            </div>
            <div class="grid gap-4">
                @foreach ($app['features'] as $feature)
                    <div class="rounded-md border border-slate-200 bg-slate-50 p-5 font-semibold text-slate-800">{{ $feature }}</div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
