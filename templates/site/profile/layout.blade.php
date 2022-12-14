@extends('layouts.app')

@section('title')Colissend @endsection

@section('content')
    <div class="h-full">
        <main class="mx-auto max-w-7xl pb-10 lg:py-12 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
                <aside class="py-6 px-2 sm:px-6 lg:col-span-3 lg:py-0 lg:px-0">
                    @include('site.profile.parts.nav')
                </aside>
                <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">
                    @yield('profile')
                </div>
            </div>
        </main>
    </div>
@endsection
{{--@livewire('profile.profile-create', ['user' => $user])--}}
