<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class=" bg-yellow-500 min-h-screen">
    @if (Route::has('login'))
        @auth
        <!-- Dashboard -->
            <div class="flex justify-end">
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
            </div>
    @else
        <!-- login modal -->
        <div class="flex justify-end mt-5 mr-4 px-4 sm:mr-10 sm:px-8">
            <div x-data="{ open: false }">
                <!-- login click -->
                <a @click="open = true" class="font-bold tracking-wider cursor-pointer bg-blue-500 text-white text-sm px-4 py-3 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-pen fa-xs" style="color: #ffffff;"></i> LOGIN
                </a>
                <div x-cloak x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                    <div @click.away="open = true" class="w-[90%] sm:w-[70%] md:w-[50%] lg:w-[35%] bg-white p-6 rounded-lg shadow-lg max-h-[90vh] overflow-y-auto mx-auto">
                        <div class="flex justify-between items-start pb-3">
                            <div class="ml-[50px] sm:ml-[115px] md:ml-[130px] lg:ml-[150px]">
                                <img src="{{ asset('img/login.png') }}" alt="login" class="w-[80px] h-[80px] sm:w-[100px] sm:h-[100px] mx-auto">
                            </div>
                            <a @click="open = false" class="cursor-pointer text-black text-sm px-3 py-2 rounded hover:text-red-500">X</a>
                        </div>
                        <!-- login form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="py-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input id="email" name="email" type="email" autocomplete="email" required
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input id="password" name="password" type="password" autocomplete="current-password" required
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember_me" name="remember" type="checkbox"
                                        class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4">
                                <button type="submit"
                                    class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    LOGIN
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center h-screen">                       
            <div class="relative">
                <div class="flex flex-col md:flex-row items-center justify-center text-center md:text-left">
                    <div class="w-[150px] h-[150px] md:w-[300px] md:h-[300px]">
                        <img src="{{asset('img/laptop.gif')}}" alt="Laptop GIF" class="w-full h-full object-contain">
                    </div>
                    <h1 class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mt-4 md:mt-0 md:ml-8">
                        Event Tabulation System
                    </h1>
                </div>
            </div>
        </div>

        @endauth
    @endif

</body>

</html>