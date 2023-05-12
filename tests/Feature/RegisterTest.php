<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Customer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // $customer = Customer::factory(1)->create();
        $customer = Customer::factory()->make();


        $response = $this->post('/register', [
            'full_name' => $customer->full_name,
            'username' => $customer->username,
            'email' => $customer->email,
            'password' => $customer->password,
            'address' => $customer->address,
            'birthdate' => $customer->birthdate,
            'phone' =>  $customer->phone,
        ]);

        $response->assertRedirect('/sendmail/'. $customer->username);
    }
}
