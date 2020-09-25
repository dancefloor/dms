<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Dancefloor</title>
    <meta name="description" content="@yield('description')">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">


    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    @yield('css')
    <livewire:styles>
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <section class="flex flex-row h-screen">
        @if(auth()->user()->hasVerifiedEmail())
        <aside class="flex-none w-64 pb-6 hidden md:block bg-gray-800 text-white">
            <nav class="mt-10 px-10 relative z-10">
                @include('layouts.navigation')
            </nav>
        </aside>
        @endif

        <main class="flex-1 flex flex-col overflow-hidden bg-gray-100 mt-8">
            <div class="px-6 py-4 flex-1 overflow-y-scroll">
                <div class="mt-10 container mx-auto px-2 sm:px-6">
                    @if (session()->has('success'))
                    <div x-data="{ open: true }" x-show="open">
                        <!--Header Alert-->
                        <div class="alert-banner w-full mb-10">
                            <label
                                class="close cursor-pointer flex items-center justify-between w-full py-4 px-5 bg-green-400 rounded text-white font-bold"
                                title="close" for="banneralert">
                                {{ session()->get('success') }}
                                <button type="button" @click="open = false">
                                    @include('icons.x', ['style'=>'w-3'])
                                </button>
                            </label>
                        </div>
                    </div>
                    @endif

                    @yield('content')

                </div>

            </div>
        </main>
    </section>
    {{-- @include('layouts.footer') --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    @stack('scripts')
    <livewire:scripts>
</body>

</html>