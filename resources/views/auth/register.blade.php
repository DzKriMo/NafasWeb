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
        <link rel="stylesheet" href="/css/reg.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-white w-100%" style="padding-left: 48%; padding-top: 0.5%; padding-bottom: 0.5%;">
            <a href="{{route('index')}}">
                <img src="/img/logo.png" alt="logo" style="width: 35px; height:35px; filter: invert(100%);">
            </a>
        </div>



        <div id="body-cont" style="background-color: #F5F5F5;" class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900" >
          <div id="contP">
          <div id="parag">
            <h1>Join us</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
          </div> 

          <div id="progress-cont">
            
            <div id="circle1" class="circle">1</div>
            <hr style="border-color: black; width: 30%;">
            <div id="circle2" class="circle">2</div>
            <hr style="border-color: black; width: 30%;">
            <div id="circle3" class="circle">3</div>
          </div>
            
          <div id="form-cont1" class="w-full mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
            
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div id="cir1">
                        <div id="circles1" class="circles">1</div>
                        <H2>Basic info</H2>
                    </div>
                    <p style="font-size: 14px; margin-top: 10px; color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                    <br>
                    <span style="color: black;"><B>*All fields required unless noted.</B></span>
                    </p>

                    <!-- First Name -->
                    <div class="mt-4">
                        <label for="Fname" class="block font-medium text-sm">*First name</label>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="Fname" :value="old('Fname')" required autofocus autocomplete="Fname" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Middle Name -->
                    <div class="mt-4">
                        <label for="Mname" class="block font-medium text-sm">Middle name</label>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="Mname" :value="old('Mname')" autofocus autocomplete="Mname" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div class="mt-4">
                        <label for="Lname" class="block font-medium text-sm">*Last name</label>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="Lname" :value="old('Lname')" required autofocus autocomplete="Lname" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Gender -->
                    <div class="mt-4">
                        <label for="gender" class="block font-medium text-sm">*What is your gender ?</label>
                        <input type="radio" value="f">
                        <label for="f"><b>Female</b></label>
                        <input type="radio" value="m" style="margin-left: 10%;">
                        <label for="m"><b>Male</b></label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Date of birth -->
                    <div class="mt-4">
                        <label for="dob" class="block font-medium text-sm">*What is your date of birth ?</label>
                        
                        <div id="dob">
                            <div>
                            <label for="Day"class="block font-medium text-sm mt-3" >Day</label>
                            <input class="mt-2 rounded-md border-gray-300" type="number" name="Day" id="Day" min="0" max="31">
                            </div>
                            <div>
                            <label for="Month"class="block font-medium text-sm mt-3" >Month</label>
                            <input class="mt-2 rounded-md border-gray-300" type="number" name="Month" id="Month" min="0" max="12">
                            </div>
                            <div>
                            <label for="Year"class="block font-medium text-sm mt-3" >Year</label>
                            <input class="mt-2 rounded-md border-gray-300" type="number" name="Year" id="Year" min="1924" max="2020">
                        </div>
                        </div>

                        
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <x-secondary-button id="next1" style="background-color: #2C6975; color: white; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4">Next</x-secondary-button>
                </form>
            </div>




            <div id="form-cont2" class="w-full mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
            
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div id="cir1">
                        <div id="circles2" class="circles">2</div>
                        <H2>Contact info</H2>
                    </div>
                    <p style="font-size: 14px; margin-top: 10px; color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                    <br>
                    <span style="color: black"><B>*All fields required unless noted.</B></span>
                    </p>

                    <!-- Phone -->
                    <div class="mt-4">
                        <label for="phone" class="block font-medium text-sm">*Phone number</label>
                        <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <x-secondary-button id="next2" style="background-color: #2C6975; color: white; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4">Next</x-secondary-button>
                </form>
            </div>

            <div id="form-cont3" class="w-full mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
            
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div id="cir1">
                        <div id="circles3" class="circles">3</div>
                        <H2>Login info</H2>
                    </div>
                    <p style="font-size: 14px; margin-top: 10px; color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                    <br>
                    <span style="color: black"><B>*All fields required unless noted.</B></span>
                    </p>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('*Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>


                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('*Password')" />
            
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            


                    <x-secondary-button style="background-color: #2C6975; color: white; width: 100%; border-radius: 60PX; height: 50px; justify-content: center; font-size: 16PX;" class="mt-4">Next</x-secondary-button>
                </form>
            </div>
        </div>
        </div>

    </body>
</html>

<script>
    "use strict";

    const form1 = document.getElementById("form-cont1");
    const form2 = document.getElementById("form-cont2");
    const form3 = document.getElementById("form-cont3");
    const circle1 = document.getElementById("circle1");
    const circle2 = document.getElementById("circle2");
    const circle3 = document.getElementById("circle3");
    const circles1 = document.getElementById("circles1");
    const circles2 = document.getElementById("circles2");
    const circles3 = document.getElementById("circles3");
    

    //============== Next Form===============
    function nextOne() {
       form1.style.height = "68px";
       form2.style.height = "AUTO";
       circle2.style.opacity = "1";
       circle1.style.opacity = "0.5";
       circles2.style.opacity = "1";
       circles1.style.opacity = "0.5";
    }
  //============ Second Form=============
function nextTwo() {
  form2.style.height = "68px";
  form3.style.height = "AUTO";
  circle3.style.opacity = "1";
  circle2.style.opacity = "0.5";
  circles3.style.opacity = "1";
  circles2.style.opacity = "0.5";
}


//================= btn Events===================
const btnsEvents = () => {
  const next1 = document.getElementById("next1");
  const next2 = document.getElementById("next2");


  next1.addEventListener("click", nextOne);

  next2.addEventListener("click", nextTwo);

};
document.addEventListener("DOMContentLoaded", btnsEvents);
</script>



