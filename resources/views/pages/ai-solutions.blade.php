@extends('layouts.frontend')

@section('title', 'AI Solutions')

@section('content')
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <img
            src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1800&q=80"
            alt="AI data network visualization"
            class="absolute inset-0 h-full w-full object-cover opacity-25"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(2,6,23,0.96)_0%,rgba(15,23,42,0.86)_52%,rgba(15,23,42,0.5)_100%)]"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 px-5 py-16 lg:grid-cols-[0.92fr_1.08fr] lg:px-8 lg:py-20">
            <div class="flex flex-col justify-center">
                <p class="eyebrow">AI Solutions</p>
                <h1 class="mt-5 max-w-4xl text-4xl font-semibold leading-tight text-white md:text-6xl">Practical AI systems for smarter digital operations.</h1>
                <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200">TeaManjur helps companies add AI where it creates real business value: faster support, better content workflows, internal assistants, lead qualification, and smarter operational decisions.</p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a class="btn-primary" href="{{ route('contact') }}">Plan an AI workflow</a>
                    <a class="btn-secondary" href="{{ route('services') }}">Explore services</a>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-end">
                <div class="w-full max-w-xl rounded-3xl border border-white/10 bg-white/10 p-4 shadow-2xl shadow-black/30 backdrop-blur">
                    <img
                        src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80"
                        alt="Business analytics dashboard"
                        class="aspect-[4/3] w-full rounded-2xl object-cover"
                    >
                    <div class="mt-4 grid grid-cols-3 gap-3">
                        <div class="rounded-lg border border-white/10 bg-slate-950/60 p-3">
                            <p class="text-xl font-semibold text-white">AI</p>
                            <p class="mt-1 text-xs uppercase tracking-wide text-slate-300">Workflows</p>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-slate-950/60 p-3">
                            <p class="text-xl font-semibold text-white">24/7</p>
                            <p class="mt-1 text-xs uppercase tracking-wide text-slate-300">Assistants</p>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-slate-950/60 p-3">
                            <p class="text-xl font-semibold text-white">Ops</p>
                            <p class="mt-1 text-xs uppercase tracking-wide text-slate-300">Automation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-band">
        <div class="grid gap-10 lg:grid-cols-[0.78fr_1.22fr] lg:items-start">
            <div>
                <p class="section-eyebrow">AI for business</p>
                <h2 class="section-title">Where AI can help TeaManjur clients move faster.</h2>
                <p class="section-copy">The right AI feature should reduce busywork, improve quality, or make existing data easier to use. We keep the experience focused, secure, and manageable.</p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['Customer support assistants', 'Answer common questions, route requests, and reduce response time.'],
                    ['Content generation workflows', 'Draft service copy, summaries, product descriptions, and marketing content.'],
                    ['Lead intake and scoring', 'Collect structured details and prioritize high-fit business inquiries.'],
                    ['Document summarization', 'Turn long PDFs, forms, and notes into usable summaries.'],
                    ['Internal knowledge search', 'Help teams find policies, project details, and operational knowledge.'],
                    ['Automated reporting', 'Convert raw updates into cleaner business reports and dashboards.'],
                ] as [$title, $copy])
                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-5 shadow-sm">
                        <h3 class="font-semibold text-slate-950">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">{{ $copy }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-tint">
        <div class="site-container grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
            <img
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1200&q=80"
                alt="Team working on automation systems"
                class="aspect-[16/10] w-full rounded-lg border border-slate-200 object-cover shadow-sm"
                loading="lazy"
            >

            <div>
                <p class="section-eyebrow">Implementation Approach</p>
                <h2 class="section-title">Built into real workflows, not added as a gimmick.</h2>
                <p class="section-copy">TeaManjur can connect AI features with modern web systems, forms, dashboards, app pages, and internal tools so the technology supports the way the business already works.</p>
                <div class="mt-7 grid gap-3">
                    @foreach (['Workflow planning before prompts', 'Human review where accuracy matters', 'Framework-ready integration structure'] as $item)
                        <div class="rounded-md border border-slate-200 bg-white p-4 text-sm font-semibold text-slate-800 shadow-sm">{{ $item }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
