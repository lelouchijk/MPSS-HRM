<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 " :status="session('status')" />
    <div
        class="flex items-center justify-center text-3xl font-semibold
                lg:pt-[7vh] lg:pb-[2vh] 
                md:pt-[7vh] md:pb-[2vh] 
                sm:pt-[7vh] sm:pb-[2vh] 
                pt-[7vh] 
                text-[#1E352A]">
        <span class="text-[#1E352A]">Login</span>
    </div>
    <div
        class="lg:flex lg:items-center lg:justify-center
                md:flex md:items-center md:justify-center
                sm:flex sm:items-center sm:justify-center
                flex items-center justify-center
                text-sm font-semibold ">
        <div class="w-[70%] flex mt-[3.5vh] items-center justify-center"> <!-- mt-5 p-3 -->

            <form method="POST" action="{{ route('login') }}"class="w-full max-w-sm mb-7 ">
                @csrf

                <!-- Email Address -->
                <div class="">
                    <x-input-label for="login" :value="__('Email')" />
                    <x-text-input id="login"
                        class="block lg:mt-[1vh] md:mt-[1vh] sm:mt-[1vh]  w-[240px] md:min-w-[280px] md:w-[30vw] lg:w-[15vw] lg-min-w[220px]  lg-max-w[304px] placeholder:opacity-100 sm:placeholder:opacity-100 placeholder:text-transparent sm:placeholder:text-white-400 "
                        type="text" name="login" :value="old('login')" required autofocus autocomplete="username"
                        placeholder="Enter your email" />
                    <x-input-error :messages="$errors->get('login')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password"
                        class="block lg:mt-[1vh] md:mt-[1vh] sm:mt-[1vh] w-[240px] md:min-w-[280px] md:w-[30vw] lg:w-[15vw] lg-min-w[220px] lg-max-w[304px]placeholder:opacity-100 sm:placeholder:opacity-100 placeholder:text-transparent sm:placeholder:text-white-400"
                        type="password" name="password" required autocomplete="current-password"
                        placeholder="Enter your password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div
                    class="sm:flex sm:items-center sm:justify-between md:items-center md:justify-between lg:mb-[3vh] md:mb-[1vh] text-sm mt-[3vh] block">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 dark:border-gray-700  shadow-sm hidden sm:block "
                            name="remember">
                        <span
                            class="ms-2 text-xs text-[#1E352A] font-semibold hidden sm:block">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-xs text-[#1E352A] text-[#1E352A] font-semibold hover:text-gray-900 dark:hover:text-gray-100 rounded-md dark:focus:ring-offset-gray-800 pr-1 items-center justify-center"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-center mt-[4vh] ">

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
