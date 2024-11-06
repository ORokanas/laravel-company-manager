@extends('layouts.clean')

@section('title', 'Create Company')

@include('layouts.navigation')

<div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-8 text-center">Create Company</h2>

    <form action="{{ route('company.store') }}" method="POST">
        @csrf

        <!-- Name Field -->
        <div class="mb-6">
            <x-input-label for="name" :value="__('Name')" class="text-gray-700 dark:text-gray-300" />
            <x-text-input id="name" class="block mt-1 w-full border border-gray-300 dark:border-gray-600 rounded-md p-3 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200  " 
                          type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
        </div>

        <!-- Address Field -->
        <div class="mb-6">
            <x-input-label for="address" :value="__('Address')" class="text-gray-700 dark:text-gray-300" />
            <x-text-input id="address" class="block mt-1 w-full border border-gray-300 dark:border-gray-600 rounded-md p-3 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200  " 
                          type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2 text-red-500" />
        </div>

        <!-- Website Field -->
        <div class="mb-6">
            <x-input-label for="website" :value="__('Website')" class="text-gray-700 dark:text-gray-300" />
            <x-text-input id="website" class="block mt-1 w-full border border-gray-300 dark:border-gray-600 rounded-md p-3 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200  " 
                          type="text" name="website" :value="old('website')" required autocomplete="website" />
            <x-input-error :messages="$errors->get('website')" class="mt-2 text-red-500" />
        </div>

        <!-- Email Field -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300" />
            <x-text-input id="email" class="block mt-1 w-full border border-gray-300 dark:border-gray-600 rounded-md p-3 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200  " 
                          type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        

        <!-- Submit & Cancel Button -->
        <div class="flex justify-center mt-8 space-x-6">
            <a href="{{ route('company') }}" class="bg-gray-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-gray-600 transition ease-in-out duration-150">
                Cancel
            </a>

            <button type="submit" class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 transition ease-in-out duration-150">
                Create
            </button>
        </div>    
        
    </form>
</div>

@include('layouts.partials.footer')