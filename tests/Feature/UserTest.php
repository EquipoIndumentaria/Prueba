<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_create_user()
    {
        ////User::factory()->create();
        $response = $this->post('/register', [
            'name'    => 'Beto Garcia',
            'email'   => 'test@test.com',
            'password'   => '$Dolar1000',
            'password_confirmation'   => '$Dolar1000',
        ]);
        $response->assertStatus(302);
    }
    public function test_recovery_password()
    {
        $response = $this->post('/forgot-password', [
            'email'   => 'angel.1999barsa@gmail.com',
        ]);
        $response->assertStatus(302);
    }
}
