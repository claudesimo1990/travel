@extends('layouts.app')

@section('title')Colissend|Posts @endsection

@section('content')

    <div class="grid sm:grid-cols-1 md:grid-cols-12 gap-4">
        <div class="sm:col-span-12 md:col-span-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos dolore, doloribus enim
            est fugit illo, libero necessitatibus officia quidem quo reiciendis unde? Distinctio et numquam sint
            voluptate voluptatibus, voluptatum.
        </div>
        <div></div>
    </div>

    <div class="grid sm:grid-cols-1 md:grid-cols-12 gap-4">
        <div class="sm:col-span-12 md:col-span-8">
            @foreach($posts as $post)
                @include('includes.post', $post)
            @endforeach
            {{ $posts->links('pagination.custom') }}
        </div>
        <div class="sm:col-span-12 md:col-span-4">
            <h2 class="text-sm font-medium text-black-500">Pubs</h2>
            <ul role="list" class="mt-3 flex flex-col gap-4">
                <li class="col-span-1 flex rounded-md shadow-sm">
{{--                    <div class="flex-shrink-0 flex items-center justify-center bg-black px-6 text-white text-sm font-medium rounded-l-md">ABUS KRANSYSTEME GMBH</div>--}}
                    <div class="flex flex-1 items-center justify-between truncate rounded-r-md border-t border-r border-b border-gray-200 bg-white">
                        <div class="flex-1 truncate px-4 py-2 text-sm">
                            <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Component Design</a>
                            <p class="text-gray-500">12 Members</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection
