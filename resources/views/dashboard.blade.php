@extends('layouts.clean')   

@section('title', 'Dashboard')

@include('layouts.navigation')

@section('childContent')

<div class="text-center py-8">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">
        Welcome, {{ auth()->user()->name }}!
    </h1>

    <a href="{{ route('company.create') }}" 
       class="inline-flex items-center bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 transition ease-in-out duration-150">
        <i class="fa fa-plus mr-2"></i>
        Create Company
    </a>   
</div>

<div class="text-center py-8">
    @include('company.index', ['companies' => $companies])
</div>
    
@endsection

@include('layouts.partials.footer')
