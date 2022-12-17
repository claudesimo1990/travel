@extends('layouts.app')

@section('title')Colissend @endsection

@section('content')
    <main class="overflow-hidden">
        <div class="bg-warm-gray-50">
            <div class="py-24 lg:py-16">
                <div class="relative z-10 mx-auto max-w-7xl pl-4 pr-8 sm:px-6 lg:px-8">
                    @yield('auth.title')
                </div>
            </div>
        </div>
        <section class="relative bg-white" aria-labelledby="contact-heading">
            <div class="absolute h-1/2 w-full bg-warm-gray-50" aria-hidden="true"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <svg class="absolute top-0 right-0 z-0 -translate-y-16 translate-x-1/2 transform sm:translate-x-1/4 md:-translate-y-24 lg:-translate-y-72" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-warm-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                </svg>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="relative bg-white shadow-xl">
                    <h2 id="contact-heading" class="sr-only">@lang('register')</h2>

                    <div class="">
                        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                            @yield('auth')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
