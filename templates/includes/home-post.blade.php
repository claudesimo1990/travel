<li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
    <div class="flex flex-1 flex-col p-8">
        <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-sm font-medium text-gray-900">{{ $post->user->firstname }}</h3>
        <dl class="mt-1 flex flex-grow flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-sm text-gray-500">{{ $post->user->email }}</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
                <span class="rounded-full bg-green-100 px-2 py-1 text-xs font-medium text-green-800">{{ 'veriefied' }}</span>
            </dd>
        </dl>
    </div>
    <div>
        <ul role="list" class="divide-y divide-gray-200">
            <li class="flex justify-between">
                <div class="px-4 py-4 sm:px-4">
                    <div class="flex items-center justify-between">
                        <div class="truncate text-sm font-medium">Depart</div>
                        <div class="ml-2 flex flex-shrink-0">
                        <span class="inline-flex rounded-full px-2 text-xs font-semibold leading-5 text-green-800">
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/map-pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $post->from }}
                        </span>
                        </div>
                    </div>
                    <div class="mt-2 flex justify-between">
                        <div class="sm:flex">
                            <div class="flex items-center text-sm text-gray-500">
                                Date
                            </div>
                        </div>
                        <div class="ml-2 flex items-center text-sm text-gray-500">
                            {{ $post->dateFrom }}
                        </div>
                    </div>
                </div>
                <div class="px-4 py-4 sm:px-4">
                    <div class="flex items-center justify-between">
                        <div class="truncate text-sm font-medium">Arrivee</div>
                        <div class="ml-2 flex flex-shrink-0">
                            <span class="inline-flex rounded-full px-2 text-xs font-semibold leading-5 text-green-800">
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/map-pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $post->to }}
                            </span>
                        </div>
                    </div>
                    <div class="mt-1 flex justify-between">
                        <div class="sm:flex">
                            <div class="flex items-center text-sm text-gray-500">
                                Date
                            </div>
                        </div>
                        <div class="ml-2 flex items-center text-sm text-gray-500">
                            {{ $post->dateTo }}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="-mt-px flex divide-x divide-gray-200 border-t-2">
            <div class="flex w-0 flex-1">
                <a href="mailto:janecooper@example.com" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                    <span class="ml-3">2</span>
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                    </svg>
                    <span class="ml-16">10&euro;/</span>
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                    </svg>
                </a>
            </div>
            <div class="flex w-0 flex-1">
                <a href="#" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                    <span class="ml-3">{{ $post->kilo }}</span>
                    <span>KG</span>
                    <span class="ml-16">{{ $post->price }}&euro;/KG</span>
                </a>
            </div>
        </div>
        <div class="-mt-px flex border-t-2">
            <div class="-ml-px flex w-0 flex-1">
                <a href="{{ route('post.show', ['post' => $post]) }}" class="relative inline-flex w-0 flex-1 items-center justify-center rounded-br-lg border border-transparent py-4 text-indigo-500 font-medium hover:text-gray-500">
                    <svg class="h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-center ml-3">Interesse?</span>
                </a>
            </div>
        </div>

    </div>
</li>

