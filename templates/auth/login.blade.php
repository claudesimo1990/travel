@extends('auth.layout')

@section('auth.title')
    <h1 class="text-4xl font-bold tracking-tight text-warm-gray-900 sm:text-5xl lg:text-6xl">@lang('login.heading')</h1>
@endsection

@section('auth')
    <livewire:auth.login :user="$user"/>
@endsection
