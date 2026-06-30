@extends('layouts.frontend')

@section('title', 'Contact')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">Contact</p>
        <h1 class="page-title">Let us plan your next digital project.</h1>
        <p class="page-copy">Tell TeaManjur what you want to build: a website, web application, AI workflow, business automation, or App Store promotion page.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <h2 class="section-title">Project inquiries</h2>
                <p class="mt-4 text-slate-600">A working contact form will be added with the Contact Leads module. For Phase 1, this page establishes the public contact surface.</p>
            </div>
            <form class="grid gap-4 rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
                <input class="form-input" type="text" placeholder="Name" disabled>
                <input class="form-input" type="email" placeholder="Email" disabled>
                <select class="form-input" disabled>
                    <option>Project type</option>
                </select>
                <textarea class="form-input min-h-32" placeholder="Project details" disabled></textarea>
                <button class="btn-primary cursor-not-allowed opacity-70" type="button">Contact form coming soon</button>
            </form>
        </div>
    </section>
@endsection
