@extends('layouts.frontend')

@section('title', 'Web Development')

@section('content')
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1800&q=80"
            alt="Modern web development workspace"
            class="absolute inset-0 h-full w-full object-cover opacity-25"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(2,6,23,0.96)_0%,rgba(15,23,42,0.86)_52%,rgba(15,23,42,0.45)_100%)]"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 px-5 py-16 lg:grid-cols-[0.95fr_1.05fr] lg:px-8 lg:py-20">
            <div class="flex flex-col justify-center">
                <p class="eyebrow">Web Development</p>
                <h1 class="mt-5 max-w-4xl text-4xl font-semibold leading-tight text-white md:text-6xl">Modern multi-technology websites and web applications for growing companies.</h1>
                <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200">From polished company websites to business dashboards and custom workflows, TeaManjur builds web systems that are fast, structured, and ready for future admin control.</p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a class="btn-primary" href="{{ route('contact') }}">Start web project</a>
                    <a class="btn-secondary" href="{{ route('portfolio.index') }}">View portfolio</a>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-end">
                <div class="w-full max-w-xl rounded-3xl border border-white/10 bg-white/10 p-4 shadow-2xl shadow-black/30 backdrop-blur">
                    <img
                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80"
                        alt="Responsive web application on laptop"
                        class="aspect-[4/3] w-full rounded-2xl object-cover"
                    >
                    <div class="mt-4 grid grid-cols-3 gap-3">
                        <div class="rounded-lg border border-white/10 bg-slate-950/60 p-3">
                            <p class="text-xl font-semibold text-white">UI</p>
                            <p class="mt-1 text-xs uppercase tracking-wide text-slate-300">Design</p>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-slate-950/60 p-3">
                            <p class="text-xl font-semibold text-white">API</p>
                            <p class="mt-1 text-xs uppercase tracking-wide text-slate-300">Ready</p>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-slate-950/60 p-3">
                            <p class="text-xl font-semibold text-white">CMS</p>
                            <p class="mt-1 text-xs uppercase tracking-wide text-slate-300">Future</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-band">
        <div>
            <div class="section-heading">
                <p class="section-eyebrow">Development Capability</p>
                <h2 class="section-title">Web systems with clean frontend, strong backend, and room to grow.</h2>
                <p class="section-copy">TeaManjur focuses on practical architecture: clear pages, fast interfaces, flexible technology foundations, and admin-ready content structures.</p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <div class="surface-card">
                    <h2 class="card-title">Multi-technology systems</h2>
                    <p class="card-copy">A strong backend foundation for business tools, content management, APIs, and integrations.</p>
                </div>
                <div class="surface-card">
                    <h2 class="card-title">Blade and Tailwind UI</h2>
                    <p class="card-copy">Clean, responsive interfaces that load quickly, look professional, and stay maintainable.</p>
                </div>
                <div class="surface-card">
                    <h2 class="card-title">Admin-ready content</h2>
                    <p class="card-copy">Frontend structures designed to connect smoothly to Filament resources in later phases.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-tint">
        <div class="site-container grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
            <img
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1200&q=80"
                alt="Development team planning web application"
                class="aspect-[16/10] w-full rounded-lg border border-slate-200 object-cover shadow-sm"
                loading="lazy"
            >

            <div>
                <p class="section-eyebrow">Professional Process</p>
                <h2 class="section-title">Designed for business clarity and technical durability.</h2>
                <p class="section-copy">A good website should explain your services, earn trust, capture leads, and keep future development easy. TeaManjur builds with that full lifecycle in mind.</p>

                <div class="mt-7 grid gap-3">
                    @foreach (['Clear service architecture', 'Responsive user experience', 'Maintainable routes, controllers, APIs, and views', 'Ready for admin modules and integrations'] as $item)
                        <div class="rounded-md border border-slate-200 bg-white p-4 text-sm font-semibold text-slate-800 shadow-sm">{{ $item }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
