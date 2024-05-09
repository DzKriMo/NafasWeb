<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nafes</title>
        <link rel="icon" type="image/x-icon" href="/img/logo.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
        <link rel="stylesheet" href="/css/log.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        
        <div class="bg-white w-100%" style=" padding: 0.5% 1% ; display: flex; justify-content: space-between;">
            <a href="{{route('index')}}">
                Back to home page
            </a>
            <a href="{{route('register')}}" >
                Create an account
            </a>
        </div>

        <div style="background-color: #f5f5f5;" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900">
            
            <div class="container">
            <div id="logo" >
                <img src="/img/logo.png" alt="logo" style="width: 40px; height:40px; filter: invert(100%);">
                <h1>Log in</h1>
            </div>

            <div id="form-cont" class="w-full sm:max-w-md mt-6 px-16 py-4  overflow-hidden sm:rounded-lg">
                
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-3 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 " />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-3 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>

            
            <x-secondary-button id="next1" style="background-color: #2C6975; color: white; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4">{{ __('Log in') }}</x-secondary-button>
            
    </form>
            </div>
            <div class="lign">
                <div class="or"><I>OR</I></div>
            </div>

            <div id="social" class="w-full sm:max-w-md mt-6 px-16 py-4 overflow-hidden sm:rounded-lg">
                <x-secondary-button id="next1" style="background-color:  white; color: black; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4"><img src="/img/Glogo.png" alt="mail" style="margin-right: 2%;">Continue with Google</x-secondary-button> 

                <x-secondary-button id="next1" style="background-color: white; color: black; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4"><img src="/img/Flogo.png" alt="mail" style="margin-right: 2%;">Continue with facebook</x-secondary-button>
                
                <a href="{{ route('register') }}">
                <x-secondary-button id="next1" style="background-color: white; color: black; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4"><img src="/img/Vector.png" alt="mail" style="margin-right: 2%;">Sign up with email</x-secondary-button></a>
            </div>
            <div class="cant">
                <a href="#"><h1>Can't log in?</h1></a>
                
                <p style="margin-top: 6%;">Secure Login with reCAPTCHA subject to 
                    Google <a href="">Terms</a> & <a href="">Privacy</a></p>
            </div>
    
        
        </div>

        </div>
    </body>
</html>


