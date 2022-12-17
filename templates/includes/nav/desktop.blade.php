<nav class="bg-white shadow"  x-data="{ responsive: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="{{ route('app.home') }}"><img class="block h-8 w-auto" src="{{ asset('/images/colissend/logo.svg') }}" alt="Your Company"></a>
                    </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <a href="{{ route('posts.index') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 {{ (request()->routeIs('posts.index')) ? 'border-b-2 border-indigo-500' : '' }}">@lang('nav.posts')</a>
                    <a href="{{ route('posts.travel.create') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 {{ (request()->routeIs('posts.travel.create')) ? 'border-b-2 border-indigo-500' : '' }}">@lang('nav.travels')</a>
                    <a href="{{ route('posts.coli.create') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 {{ (request()->routeIs('posts.coli.create')) ? 'border-b-2 border-indigo-500' : '' }}">@lang('nav.colis')</a>
{{--                    <a href="{{ route('app.home') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900 {{ (request()->routeIs('app.shop')) ? 'border-b-2 border-indigo-500' : '' }}">@lang('nav.shop')</a>--}}
{{--                    <a href="{{ route('app.home') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900 {{ (request()->routeIs('app.blog')) ? 'border-b-2 border-indigo-500' : '' }}">@lang('nav.blog')</a>--}}
                </div>
            </div>
            @if(Auth::guest())
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('login') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 {{ (request()->routeIs('login')) ? 'border-b-2 border-indigo-800' : '' }}">@lang('nav.login')</a>
                    <a href="{{ route('register') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 {{ (request()->routeIs('register')) ? 'border-b-2 border-indigo-800' : '' }}">@lang('nav.register')</a>
                </div>
            @else
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button type="button" class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">@lang('nav.notifications')</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    <div class="relative ml-3" x-data="{ show: false }">
                        <div>
                            <button @click="show = !show" type="button" class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">@lang('nav.open_user_menu')</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>

                        <div x-show="show" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show', ['user' => Auth::user()]) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">@lang('nav.profile')</a>
{{--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>--}}
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('nav.logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button @click="responsive = !responsive" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">@lang('nav.open_main_menu')</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @include('../../includes.nav.mobile')
</nav>
