<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4">Login</h2>
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
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres-Tabulation</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-yellow-500">
    <div class="flex justify-end">
        <button class="top-0 right-0 text-white px-8 text-md font-bold mt-4 mr-4 hover:underline"
            onclick="openModal()">LOGIN</button>
    </div>

    <!-- Modal -->
    <div id="myModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 {{ $errors->any() ? '' : 'hidden' }} z-50">
        <div class="flex items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">

                <!-- Logo and Close Button -->
                <div class="flex justify-end items-center mb-4">
                    <button class="text-gray-600 hover:text-gray-900" onclick="closeModal()">x</button>
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('img/login.png') }}" alt="login" class="w-[100px] h-[100px]">
                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="py-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"
                            value="{{ old('email') }}">
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

    <div class="relative">
        <div class="flex flex-col md:flex-row items-center justify-center h-screen">
            <div class="w-[200px] h-[200px] md:w-[300px] md:h-[300px]">
                <img src="{{asset('img/laptop.gif')}}" alt="Laptop GIF" class="w-full h-full">
            </div>
            <h1 class="text-white text-center md:text-left px-4 md:px-8 text-3xl md:text-5xl font-bold mt-4 md:mt-0">
                Event Tabulation System
            </h1>
        </div>
        <div class="flex items-center justify-end w-screen">
            <img src="{{asset('/img/welcome.png')}}" alt="Laptop GIF"
                class="w-[200px] h-[200px] md:w-[400px] md:h-[400px] ">
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('myModal').classList.add('hidden');
        }
    </script>

</body>

</html>