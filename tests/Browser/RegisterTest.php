<?php

declare(strict_types=1);

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertDatabaseHas;

it('register a new user', function () {
    visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'john@example.com')
        ->fill('password', 'password')
        ->click('Create Account')
        ->assertPathIs('/');
    assertAuthenticated();
    assertDatabaseHas('users', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ]);
});
