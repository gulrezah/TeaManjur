@extends('layouts.frontend')

@section('title', 'About')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">About TeaManjur</p>
        <h1 class="page-title">A practical technology partner for modern digital businesses.</h1>
        <p class="page-copy">TeaManjur blends strategy, multi-technology web engineering, clean interface design, automation thinking, and AI integration to help teams turn ideas into dependable products.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-8 md:grid-cols-3">
            <div class="surface-card">
                <h2 class="card-title">Build clearly</h2>
                <p class="card-copy">We focus on websites and systems that are easy to understand, easy to maintain, and ready to grow.</p>
            </div>
            <div class="surface-card">
                <h2 class="card-title">Automate wisely</h2>
                <p class="card-copy">We look for business processes where AI and automation can remove friction without making operations fragile.</p>
            </div>
            <div class="surface-card">
                <h2 class="card-title">Launch professionally</h2>
                <p class="card-copy">From landing pages to app promotion, TeaManjur helps digital products present themselves with confidence.</p>
            </div>
        </div>
    </section>
@endsection
