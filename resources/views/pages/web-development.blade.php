@extends('layouts.frontend')

@section('title', 'Web Development')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">Web Development</p>
        <h1 class="page-title">Modern Laravel websites and web applications.</h1>
        <p class="page-copy">From polished company websites to business dashboards and custom workflows, TeaManjur builds web systems that are fast, structured, and ready for future admin control.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-6 md:grid-cols-3">
            <div class="surface-card">
                <h2 class="card-title">Laravel-first systems</h2>
                <p class="card-copy">A strong backend foundation for business tools, content management, and integrations.</p>
            </div>
            <div class="surface-card">
                <h2 class="card-title">Blade and Tailwind UI</h2>
                <p class="card-copy">Clean, responsive interfaces that load quickly and stay maintainable.</p>
            </div>
            <div class="surface-card">
                <h2 class="card-title">Admin-ready content</h2>
                <p class="card-copy">Frontend structures designed to connect smoothly to Filament resources in later phases.</p>
            </div>
        </div>
    </section>
@endsection
