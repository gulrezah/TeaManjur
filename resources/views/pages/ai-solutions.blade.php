@extends('layouts.frontend')

@section('title', 'AI Solutions')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">AI Solutions</p>
        <h1 class="page-title">AI integrations that support real business workflows.</h1>
        <p class="page-copy">TeaManjur helps companies add AI where it creates practical value: faster support, better content workflows, internal assistants, lead qualification, and smarter operations.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <h2 class="section-title">Where AI can help</h2>
                <p class="mt-4 text-slate-600">The right AI feature should reduce busywork, improve quality, or make existing data easier to use. We keep the experience focused and manageable.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach (['Customer support assistants', 'Content generation workflows', 'Lead intake and scoring', 'Document summarization', 'Internal knowledge search', 'Automated reporting'] as $item)
                    <div class="rounded-md border border-slate-200 bg-slate-50 p-5 text-sm font-semibold text-slate-800">{{ $item }}</div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
