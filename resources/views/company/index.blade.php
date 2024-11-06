@extends('layouts.clean')   

@section('title', 'Companies')

@include('layouts.navigation')

@section('childContent')


@php
    use App\Models\Company;

    $id = Auth::user()->id;
    $companies = Company::where('user_id', $id)->get();


@endphp

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
    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">My Companies</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>            
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->website}}</td>
                <td>{{$company->address}}</td>
                <td class="action-cell">
                    <a href="{{ route('company.edit', $company) }}" 
                       style="background:none; border:none; color:inherit; cursor:pointer; text-decoration:none; display:inline;">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td class="action-cell">
                    <form action="{{ route('company.destroy', $company) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this company?');" style="background:none; border:none;  cursor:pointer;">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection

@include('layouts.partials.footer')
