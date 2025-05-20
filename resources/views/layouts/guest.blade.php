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
</head>

<body class="font-sans text-gray-900 antialiased overflow-hidden">
    <div class=" min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-[#6AC886]">

<!--        <div class="absolute top-[-50px] left-[-19px] w-[141px] h-[134px] rounded-full bg-blue-500"></div>
        <div class="absolute top-[104px] left-[120px] w-[141px] h-[134px] rounded-full bg-blue-500"></div>
        <div class="absolute top-[282px] left-[41px] w-[81px] h-[81px] rounded-full bg-blue-500"></div>
        <div class="absolute top-[585.57px] left-[-4.73px] w-[924px] h-[590px] rounded-full bg-blue-500"></div> 
        <div class="absolute top-[-346px] left-[1333.01px] w-[924px] h-[590px] rounded-full bg-blue-500 z-0" ></div>
        <div class="absolute top-[636px] left-[1400px] w-[143px] h-[129px] rounded-full bg-blue-500 z-0"></div>
        <div class="absolute top-[944px] left-[699px] w-[89px] h-[76px] rounded-full bg-blue-500 z-0"></div>
        <div class="absolute top-[848px] left-[1025px] w-[206px] h-[192px] rounded-full bg-blue-500 z-0"></div>
        <div class="absolute top-[1065px] left-[1263px] w-[79px] h-[72px] rounded-full bg-blue-500 z-0"></div>
        <div class="absolute top-[965px] left-[1566px] w-[206px] h-[192px] rounded-full bg-blue-500 z-0"></div>
        <div class="absolute top-[1065px] left-[688px] w-[81px] h-[81px] rounded-full bg-blue-500 z-0"></div> -->

        <div class = "flex sm:w-[62vw] lg:h-[75.14vh] max-h-[75.14vh] z-10 "> <!-- 65vw -->
            <div class="relative hidden xl:block xl:basis-[45%] bg-[#FFFFFF] p-4 min-h-[200px] rounded-l-2xl
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
