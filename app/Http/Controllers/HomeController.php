<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        // $companyData = [
        //     "name" => "comp1",
        //     "user_id" => 1,
        //     "address" => "address1",
        //     "website" => "https://example.com",
        //     "email" => "test@test.com",
        // ];

        // $company = Company::create($companyData);

        // $user = User::find(1);

        // $user->companies()->create(['name' => 'comp2', 'email'=> 'test2@test.com', 'website' => 'website.com', 'address' => 'somewhere']);

        // $users = User::factory(10)->hasCompanies(1)->create();
        // dd($users);

        // $user = User::find(2);
        // dd($user);
        // $companies = Company::factory(3)->for($user)->create();
        // dd(vars: $companies);

        return view('home.index');
    }
}
