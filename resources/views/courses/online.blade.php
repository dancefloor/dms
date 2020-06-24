@extends('layouts.front')

@section('content')

<div class="container mx-auto">
    <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center">
            <h2
                class="text-4xl tracking-tight leading-10 font-extrabold text-gray-800 sm:text-5xl sm:leading-none md:text-6xl uppercase">
                Intensive week
                <br class="xl:hidden" />
                <span class="text-red-700">Salsa fusion
                </span>
            </h2>
            <div class="flex justify-center">
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    with Kouame DANCEFLOOR & Fred DANCEFLOOR
                </p>
            </div>

            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                <div class="rounded-md shadow">
                    <a href="#"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Get started
                    </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Live demo
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="flex justify-center my-10">
    <iframe
        src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDancefloorGeneva%2Fvideos%2F529697621057960%2F&show_text=0&width=560"
        width="600" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
        allowTransparency="true" allowFullScreen="true"></iframe>

</div>
<iframe
    src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDancefloorGeneva%2Fvideos%2F2250602018507552%2F&show_text=0&width=476"
    width="500" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
    allowFullScreen="true"></iframe>


@endsection