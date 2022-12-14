@extends('layouts.app')

@section('title')Colissend|Posts @endsection

@section('content')

    <div class="sm:col-span-12 md:col-span-4 md:pb-32">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between justify-center sm:flex-nowrap py-4">
                    <div class="ml-4 mt-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $post->user->firstname }}</h3>
                                <p class="text-sm text-gray-500">
                                    <a href="#">{{ $post->user->email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="ml-4 mt-4">
{{--                        <span class="text-xl font-bold leading-6 text-gray-900 flex justify-between gap-4">--}}
{{--                            <h3 class="text-lg font-bold leading-6 text-gray-900">@lang('post.booking.kilo_available') {{ $post->kilo }}KG</h3>--}}
{{--                                <h3 class="text-lg font-medium leading-6 text-gray-900">@lang('post.booking.kilo_price') {{ $post->price }}&euro; /KG</h3>--}}
{{--                        </span>--}}
                    </div>
                </div>
            </div>
{{--            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">--}}
{{--                <dl class="sm:divide-y sm:divide-gray-200">--}}
{{--                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">--}}
{{--                        <dt class="text-sm font-medium text-gray-500">@lang('post.from')</dt>--}}
{{--                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->from }}</dd>--}}
{{--                    </div>--}}
{{--                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">--}}
{{--                        <dt class="text-sm font-medium text-gray-500">@lang('post.to')</dt>--}}
{{--                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->to }}</dd>--}}
{{--                    </div>--}}
{{--                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">--}}
{{--                        <dt class="text-sm font-medium text-gray-500">@lang('post.date_from')</dt>--}}
{{--                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->dateFrom }}</dd>--}}
{{--                    </div>--}}
{{--                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">--}}
{{--                        <dt class="text-sm font-medium text-gray-500">@lang('post.date_to')</dt>--}}
{{--                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->dateTo }}</dd>--}}
{{--                    </div>--}}
{{--                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">--}}
{{--                        <dt class="text-sm font-medium text-gray-500">@lang('post.content')</dt>--}}
{{--                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->content }}</dd>--}}
{{--                    </div>--}}
{{--                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">--}}
{{--                        <dt class="text-sm font-medium text-gray-500">@lang('post.booking_headline')</dt>--}}
{{--                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">--}}
{{--                            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">--}}
{{--                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">--}}
{{--                                    <div class="flex w-0 flex-1 items-center">--}}
{{--                                        <form action="{{ route('post.booking', ['post' => $post]) }}" method="POST" class="sm:mx-auto sm:max-w-xl lg:mx-0">--}}
{{--                                            @csrf--}}
{{--                                            <div class="sm:flex justify-between">--}}
{{--                                                <div class="">--}}
{{--                                                    <input id="kilo" type="number" placeholder="{{ trans('post.booking.how_many_kilo') }}" name="kilo" class="block w-full rounded-md px-4 py-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:indigo-600 focus:indigo-600">--}}
{{--                                                    @error('kilo')--}}
{{--                                                    <small class="text-red-500">{{ $errors->first('kilo') }}</small>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-3 sm:mt-0 sm:ml-3">--}}
{{--                                                    <button type="submit" class="block w-full rounded-md bg-indigo-600 py-3 px-4 font-medium text-white shadow hover:from-teal-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:indigo-600 focus:ring-offset-gray-900">@lang('booking')</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </dd>--}}
{{--                    </div>--}}
{{--                </dl>--}}
{{--            </div>--}}
        </div>

    </div>

@endsection
