@extends('layouts.frontend')

@section('title', 'Privacy Policy')

@section('content')
    <section class="page-hero">
        <p class="eyebrow">Privacy Policy</p>
        <h1 class="page-title">TeaManjur Apps Privacy Policy</h1>
        <p class="page-copy">A clear, simple privacy statement for TeaManjur app listings and app users.</p>
    </section>

    <section class="content-band">
        <div class="grid gap-8 lg:grid-cols-[0.7fr_0.3fr]">
            <div>
                <div class="rounded-lg border border-orange-200 bg-orange-50 p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-wide text-orange-700">Privacy promise</p>
                    <h2 class="mt-3 text-3xl font-semibold leading-tight text-slate-950">We don't collect any data for any purpose from any device</h2>
                </div>

                <div class="mt-8 space-y-6 leading-8 text-slate-600">
                    <section>
                        <h2 class="text-2xl font-semibold text-slate-950">Overview</h2>
                        <p class="mt-3">TeaManjur apps are presented with a privacy-first approach. Our listed apps are designed so users can understand the policy without legal confusion.</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-semibold text-slate-950">Data Collection</h2>
                        <p class="mt-3">We do not collect, store, sell, rent, or share personal data from any device for analytics, advertising, tracking, profiling, or any other purpose.</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-semibold text-slate-950">Device Information</h2>
                        <p class="mt-3">We do not collect device identifiers, location data, contacts, files, photos, microphone data, camera data, or usage behavior from your device.</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-semibold text-slate-950">Contact</h2>
                        <p class="mt-3">If you have questions about this policy, you can contact TeaManjur through the contact page.</p>
                        <a class="mt-4 inline-flex text-sm font-semibold text-cyan-700 hover:text-cyan-900" href="{{ route('contact') }}">Contact TeaManjur</a>
                    </section>
                </div>
            </div>

            <aside>
                <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                    <h2 class="text-lg font-semibold text-slate-950">Applies to</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600">This privacy policy is linked from TeaManjur app detail pages and applies to the app listings where this policy URL is used.</p>
                    <a class="mt-5 inline-flex text-sm font-semibold text-orange-700 hover:text-orange-900" href="{{ route('apps.index') }}">View apps</a>
                </div>
            </aside>
        </div>
    </section>
@endsection
