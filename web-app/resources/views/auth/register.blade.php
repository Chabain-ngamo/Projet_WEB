<?php
session_start();
?>

<link rel="stylesheet" href="{{asset('css/register.css')}}">
<x-guest-layout class='form'>
    
    <x-auth-card>
        <x-slot name="logo" class='form'>
            <img src="{{asset('images/img_avatar2.png')}}" height="100" width="200"/>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" class="register" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="fristname" :value="__('First Name')" />

                <x-input id="fristname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
            </div>

            <!-- Second Name -->
            <div>
                <x-label for="secondname" :value="__('Second Name')" />

                <x-input id="secondname" class="block mt-1 w-full" type="text" name="secondname" :value="old('secondname')" required />
            </div>

            <!-- Centre Name -->
            <div>
                <x-label for="centre" :value="__('Centre Name')" />

                <x-input id="centre" class="block mt-1 w-full" type="text" name="centre" :value="old('centre')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>


            <div class="mt-4">
                <input type="checkbox" class="check-box"><span> I agree to the terms and conditions</span>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card >
</x-guest-layout>

