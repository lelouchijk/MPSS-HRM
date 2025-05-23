<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="font-sans text-gray-900 antialiased overflow-hidden">
    <div class=" min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-[#6AC886]">

        <div
            class="absolute w-[924px] h-[590px] left-[-20%] top-[80%] bg-[#3f6a60] [border-radius:462px/295px] rotate-[28.44deg]">
        </div>


        <div
            class="absolute w-[206px] h-[192px] left-[90%] top-[3%] [border-radius:103px/96px] [background:linear-gradient(207deg,rgba(169,232,188,0.54)_0%,rgba(47,149,78,0.54)_100%)] ">
        </div>


        <div
            class="absolute w-[206px] h-[192px] left-[85%] top-[75%] [border-radius:103px/96px] [background:linear-gradient(215deg,rgba(51,105,79,0.13)_0%,rgba(192,237,206,0.13)_100%)] hidden xl:block">
        </div>


        <div
            class="absolute w-[89px] h-[76px] left-[64%] top-[81%] [border-radius:44.5px/38px] [background:linear-gradient(215deg,rgba(51,105,79,0.32)_0%,rgba(192,237,206,0.32)_100%)] hidden xl:block">
        </div>


        <div
            class="absolute w-[141px] h-[134px] left-[26%] top-[28%] [border-radius:70.5px/67px] [background:linear-gradient(207deg,rgba(169,232,188,0.76)_0%,rgba(47,149,78,0.76)_100%)] hidden xl:block">
        </div>


        <div
            class="absolute w-[81px] h-[81px] left-[-2%] top-[-3%] rounded-full [background:linear-gradient(182deg,rgba(169,232,188,0.5)_0%,rgba(68,147,91,0.5)_100%)] xl:block">
        </div>


        <div
            class="absolute w-[81px] h-[81px] left-[21%] top-[40%] rounded-full [background:linear-gradient(182deg,rgba(169,232,188,1)_0%,rgba(68,147,91,1)_100%)] hidden xl:block">
        </div>

        <div
            class="absolute w-[206px] h-[192px] left-[118%] top-[82%] [border-radius:103px/96px] [background:linear-gradient(215deg,rgba(51,105,79,0.3)_0%,rgba(192,237,206,0.3)_100%)] hidden xl:block">
        </div>


        <div
            class="absolute w-[141px] h-[134px] left-[0%] top-[18%] [border-radius:70.5px/67px] [backdrop-filter:blur(15px)_brightness(100%)] [background:linear-gradient(207deg,rgba(169,232,188,0.8)_0%,rgba(47,149,78,0.8)_100%)]">
        </div>


        <div
            class="absolute w-[141px] h-[134px] left-[41%] top-[17%] [border-radius:70.5px/67px] [background:linear-gradient(207deg,rgba(169,232,188,1)_0%,rgba(47,149,78,1)_100%)] hidden xl:block">
        </div>


        <div
            class="absolute w-[79px] h-[72px] left-[30%] top-[-5%] [border-radius:39.5px/36px] [background:linear-gradient(215deg,rgba(51,105,79,0.39)_0%,rgba(192,237,206,0.39)_100%)] xl:block">
        </div>

        <div class = "flex sm:w-[62vw] lg:h-[75.14vh] max-h-[75.14vh] z-10 "> <!-- 65vw -->
            <div
                class="relative hidden xl:block xl:basis-[45%] bg-[#FFFFFF] p-4 min-h-[200px] rounded-l-2xl
                 ">
            
                <div class="w-20 h-20 origin-top-left scale-75">
                    <x-application-logo class="w-full h-full fill-current" />
                </div>

                <div class="absolute bottom-10 left[0px] z-10 ">
                    <img src="{{ asset('images/login-image.png') }} " alt="" class="w-76 h-80 object-cover">

                </div>

            </div>

            <div
                class="rounded-2xl xl:basis-[55%] xl:rounded-l-none sm:max-w-md  px-6 py-4 bg-[#88D39E]  overflow-hidden lg:rounded-r-2xl lg:w-full lg:flex-initial  lg:justify-center lg:items-center
                md:w-full  md:rounded-r-2xl md:rounded-l-2xl md:shadow-2xl md:overflow-hidden md:shadow-2xl md:shadow-gray-900/20
                sm:rounded-2xl sm:shadow-2xl sm:shadow-gray-900/20
                justify-center items-center 
                ">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>



</html>
