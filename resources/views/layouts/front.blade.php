<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Dancefloor</title>
    <meta name="description" content="@yield('description')">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    @yield('seo')


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">





    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">


    @yield('css')

    <livewire:styles>
</head>

<body class="bg-gray-100">
    @yield('fb')
    @include('layouts.navbar')


    @if (session()->has('success'))
    <div x-data="{ open: true }" x-show="open">
        <!--Header Alert-->
        <div class="alert-banner w-full mt-16">
            <label
                class="close cursor-pointer flex items-center justify-between w-full py-4 px-3 bg-green-400 rounded text-white font-bold"
                title="close" for="banneralert">
                {{ session()->get('success') }}
                <button type="button" @click="open = false">
                    @include('icons.x')
                </button>
            </label>
        </div>
    </div>
    @endif

    @if (session()->has('alert'))
    <div class="" x-data="{ open: true }" x-show="open">
        <!--Header Alert-->
        <div class="alert-banner w-full mt-16">
            <label
                class="close cursor-pointer flex items-center justify-between w-full py-4 px-5 bg-orange-500 text-orange-100 font-bold"
                title="close" for="banneralert">
                {{ session()->get('alert') }}
                <button type="button" @click="open = false">
                    @include('icons.x', ['style'=>'w-4'])
                </button>
            </label>
        </div>
    </div>
    @endif

    @if (session()->has('pre-registered'))
    <div class="" x-data="{ open: true }" x-show="open">
        <!--Header Alert-->
        <div class="alert-banner w-full mt-16">
            <label
                class="close cursor-pointer flex items-center justify-between w-full py-4 px-5 bg-orange-500 text-orange-100 font-semibold"
                title="close" for="banneralert">
                <span>
                    {{ session()->get('pre-registered') }}
                    <a href="{{ route('dashboard') }}" class="underline font-bold hover:text-orange-800">Dashboard</a>
                </span>
                <button type="button" @click="open = false">
                    @include('icons.x', ['style'=>'w-4'])
                </button>
            </label>
        </div>
    </div>
    @endif

    <main class="">
        @yield('content')
    </main>

    @include('layouts.footer')


    @stack('scripts')
    <livewire:scripts>
</body>

</html>