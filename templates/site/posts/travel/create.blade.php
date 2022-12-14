@extends('layouts.app')

@section('title')Colissend @endsection

@section('content')
    <div class="container m-auto mt-16">
        <h1 class="text-3xl  mb-6">Post your Travel</h1>

        @livewire('post.travel-create')
    </div>
@endsection
