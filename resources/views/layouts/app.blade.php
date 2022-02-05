<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        @include('includes.dashboard.meta')

        <title>@yield('title') | SERV</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap')}}">

        <!-- Styles -->
        @stack('before style')

        @include('includes.dashboard.style')

        @stack('after-style')

        @livewireStyles

    </head>
    
    <body class="antialiased">
        <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">

            @include('components.dashboard.dekstop')

            {{-- <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div> --}}

            @include('components.dashboard.mobile')

            <div class="flex flex-col flex-1 w-full">
                @include('components.dashboard.header')
                <main class="h-full overflow-y-auto">
                    @yield('content')
                </main>

            </div>
        </div>
    </body>

    @stack('before-script')

        @include('includes.dashboard.style')
        
    @stack('after-script')

    @livewireScripts
</html>
