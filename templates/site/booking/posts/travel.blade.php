@extends('layouts.app')

@section('title')Colissend|Posts @endsection

@section('content')

    <div class="container mx-auto mt-16">
        <div class="sm:col-span-12 md:col-span-4 md:pb-32 grid max-w-3xl grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg space-y-6 lg:col-span-2 lg:col-start-1">
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
                        <span class="text-xl font-bold leading-6 text-gray-900 flex justify-between gap-4">
                            <h3 class="text-lg font-bold leading-6 text-gray-900">@lang('post.kilos') {{ $post->kilo }}KG</h3>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">@lang('post.price') {{ $post->price }}&euro; /KG</h3>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">@lang('post.from')</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->from }}</dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">@lang('post.to')</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->to }}</dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">@lang('post.date.from')</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->dateFrom }}</dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">@lang('post.date.to')</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->dateTo }}</dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">@lang('post.content')</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $post->content }}</dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">@lang('post.booking.headline')</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list" class="divide-y divide-gray-200 rounded-md border-gray-200">
                                    <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                        <div class="flex w-0 flex-1 items-center">
                                            <form action="{{ route('post.booking', ['post' => $post]) }}" method="POST" class="sm:mx-auto sm:max-w-xl lg:mx-0">
                                                @csrf
                                                <div class="sm:flex justify-between">
                                                    <div class="">
                                                        <input id="kilo" type="number" placeholder="{{ trans('post.booking.booked') }}" name="kilo" class="block w-full rounded-md px-16 py-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:indigo-600 focus:indigo-600">
                                                        @error('kilo')
                                                            <small class="text-red-500">{{ $errors->first('kilo') }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                                        <button type="submit" class="block w-full rounded-md bg-indigo-600 py-3 px-4 font-medium text-white shadow hover:from-teal-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:indigo-600 focus:ring-offset-gray-900">@lang('post.booking.button')</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="bg-white px-4 py-5 sm:rounded-lg sm:px-6 md:overflow-scroll">
                <div class="md:max-h-16">
                    <div class="divide-y divide-gray-200">
                        <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Laissez moi un message</h2>
                        <div class="px-4 py-6 sm:px-6">
                            <ul role="list" class="space-y-8">
                                <li>
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm">
                                                <a href="#" class="font-medium text-gray-900">Leslie Alexander</a>
                                            </div>
                                            <div class="mt-1 text-sm text-gray-700">
                                                <p>Ducimus quas delectus ad maxime totam doloribus reiciendis ex. Tempore dolorem maiores. Similique voluptatibus tempore non ut.</p>
                                            </div>
                                            <div class="mt-2 space-x-2 text-sm">
                                                <span class="font-medium text-gray-500">4d ago</span>
                                                <!-- space -->
                                                <span class="font-medium text-gray-500">·</span>
                                                <!-- space -->
                                                <button type="button" class="font-medium text-gray-900">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm">
                                                <a href="#" class="font-medium text-gray-900">Michael Foster</a>
                                            </div>
                                            <div class="mt-1 text-sm text-gray-700">
                                                <p>Et ut autem. Voluptatem eum dolores sint necessitatibus quos. Quis eum qui dolorem accusantium voluptas voluptatem ipsum. Quo facere iusto quia accusamus veniam id explicabo et aut.</p>
                                            </div>
                                            <div class="mt-2 space-x-2 text-sm">
                                                <span class="font-medium text-gray-500">4d ago</span>
                                                <!-- space -->
                                                <span class="font-medium text-gray-500">·</span>
                                                <!-- space -->
                                                <button type="button" class="font-medium text-gray-900">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        </div>
                                        <div>
                                            <div class="text-sm">
                                                <a href="#" class="font-medium text-gray-900">Dries Vincent</a>
                                            </div>
                                            <div class="mt-1 text-sm text-gray-700">
                                                <p>Expedita consequatur sit ea voluptas quo ipsam recusandae. Ab sint et voluptatem repudiandae voluptatem et eveniet. Nihil quas consequatur autem. Perferendis rerum et.</p>
                                            </div>
                                            <div class="mt-2 space-x-2 text-sm">
                                                <span class="font-medium text-gray-500">4d ago</span>
                                                <!-- space -->
                                                <span class="font-medium text-gray-500">·</span>
                                                <!-- space -->
                                                <button type="button" class="font-medium text-gray-900">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                        <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80" alt="">
                            </div>
                            <div class="min-w-0 flex-1">
                                <form action="#">
                                    <div>
                                        <label for="comment" class="sr-only">About</label>
                                        <textarea id="comment" name="comment" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Add a note"></textarea>
                                    </div>
                                    <div class="mt-3 flex items-center justify-between">
                                        <button type="submit" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
