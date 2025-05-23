<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="flex flex-col overflow-hidden font-sans antialiased text-gray-900 ">
    <div class="flex items-center justify-center min-h-screen p-4 min-w-screen bg-white-500">
        <div class="bg-[#A9E8BC] rounded-2xl w-[70vw]  p-8 text-center shadow-lg">

            <div class="mb-6 max-w-20 max-h-20">
                <x-application-logo class="fill-current" />
            </div>


            <div class="flex justify-center mb-6 ">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="50" height="50" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.5 11H5a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h4.5M7 11V7a3 3 0 0 1 6 0v1.5m2.5 5.5v1.5l1 1m3.5-1a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                </svg>

            </div>


            <p class="mb-6 text-black-700 font-large">
                If you’ve lost your password to reset it,<br />
                use the link below to get started.
            </p>

            <!-- Email Input -->
            <form class="space-y-4" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="flex justify-center">
                    <div for="email" :value="__("Email")">
                        <x-input-label class="py-1 mx-2 text-start" :value="__('Email')"/>
                        <x-text-input
                            class="block w-[50vh] placeholder:opacity-100 placeholder:text-white focus:placeholder:text-[#33694F] "
                            id="input" type="text" name="email" :value="old('email')" required autofocus
                            autocomplete="email" placeholder="Enter your email" id="inputBox" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-[50vh] bg-[#7ADDB4] hover:bg-[#8BFFCF] text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-200">
                    Email password reset link
                </button>
            </form>

            <!-- Back Link -->
            <div class="mt-6">
                <a href="{{ route('login') }}" class="text-sm text-black-700 hover:underline">&larr; Back To Sign In</a> 
            </div>
        </div>
    </div>


</body>



</html>

