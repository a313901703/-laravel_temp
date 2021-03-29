<?php

namespace Tests\Feature;

use Exception;
use Tests\TestCase as BaseCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestCase extends BaseCase
{
    use RefreshDatabase;

    public $authType = 'api';

    public $token;

    public function generateUser()
    {
        $user = \App\User::first();

        $user = factory(\App\User::class)->create();
        return $user;
    }

    public function generateToken()
    {
        $user = $this->generateUser();
        if ($user === null) {
            throw new Exception('user not found');
        }
        $this->token = auth($this->authType)->login($user);
        return $this->token;
    }
}
