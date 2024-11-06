<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserCompanyRelationshipTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_owns_multiple_companies()
    {
        // Create a user and multiple companies owned by that user
        $user = User::factory()->create();
        $companies = Company::factory()->count(3)->create([
            'user_id' => $user->id, // Assign the user to these companies
        ]);

        // Assert that the user owns these companies
        $this->assertCount(3, $user->companies); // The user should own 3 companies
        $this->assertInstanceOf(Company::class, $user->companies->first()); // The first owned company should be a Company instance
        $this->assertEquals($user->id, $user->companies->first()->user_id); // Check the user_id on the first company
    }

    /** @test */
    public function a_company_belongs_to_one_user()
    {
        // Create a user and a company
        $user = User::factory()->create();
        $company = Company::factory()->create([
            'user_id' => $user->id, // Assign the user to this company
        ]);

        // Assert that the company belongs to this user
        $this->assertInstanceOf(User::class, $company->user); // The company should have a user
        $this->assertEquals($user->id, $company->user->id); // The user_id in the company should match the created user's id
    }
}