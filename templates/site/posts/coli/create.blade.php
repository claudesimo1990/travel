@extends('layouts.app')

@section('title')Colissend @endsection

@section('content')
    <div class="container m-auto mt-16">
        <h1 class="text-3xl  mb-6">Post your Coli</h1>
        @livewire('post.coli-create')
    </div>
@endsection
