@extends('layouts.app')

@section('title')Colissend @endsection

@section('content')
    <div class="container m-auto mt-16 flex flex-col">
        <div class="block">
            <h1 class="text-4xl text-black-500 font-bold mb-24">Register</h1>
        </div>

        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="w-full"
                    alt="Phone image"
                />
            </div>
            <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                <livewire:auth.register :user="$user"/>
            </div>
        </div>

    </div>
@endsection
