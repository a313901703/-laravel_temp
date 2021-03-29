<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * Test Admin Login
     *
     * @return void
     */
    public function testLogin()
    {
        $data = [
            'email' => 'admin@coffee.com',
            'password' => 'poiunNUYDqw524xcv'
        ];
        $response = $this->json('POST', '/api/admin/login',$data);
        $response->assertStatus(200);
        $response->assertJsonPath('status_code', 200);
        $response->assertJsonStructure([
            'status_code',
            'access_token',
            'token_type',
            'expires_in'
        ]);
        return json_decode($response->getContent(), true);
    }

    // /**
    //  * Test Admin Login without email
    //  *
    //  * @return void
    //  */
    // public function testLoginWithoutEmail()
    // {
    //     $data = [
    //         'email' => 'admin@coffee.com',
    //     ];
    //     $response = $this->json('POST', '/api/admin/login',$data);
    //     $response->assertStatus(200);
    //     $response->assertJsonPath('status_code', 400);
    // }

    public function errorAccountProvider()
    {
        return [
            [
                'email' => 'admin@coffee.com',
                'password' => '',
            ],
            [
                'email' => '',
                'password' => 'poiunNUYDqw524xcv',
            ],
        ];
    }

    /**
     * Test Admin Login fail
     * @dataProvider errorAccountProvider
     * @return void
     */
    public function testLoginFail(...$data)
    {
        $response = $this->json('POST', '/api/admin/login',[
            'email' => $data['0'] ?? '',
            'password' => $data['1'] ?? '',
        ]);
        $response->assertStatus(200);
        $response->assertJsonPath('status_code', 400);
    }

    /**
     * Test password error
     * @return void
     */
    public function testLoginPasswordError()
    {
        $data = [
            'email' => 'admin@coffee.com',
            'password' => '123',
        ];
        $response = $this->json('POST', '/api/admin/login',$data);
        $response->assertStatus(200);
        $response->assertJsonPath('status_code', 1001);
    }

    /**
     * test current userinfo
     *
     * @depends testLogin
     * @return void
     */
    public function testMe($data)
    {
        $response = $this->withToken($data['access_token'])->json('GET', '/api/admin/me');
        $response->assertStatus(200)->assertJsonPath('status_code', 200)->assertJsonStructure([
            'message',
            'status_code',
            'data' => [
                'id'            ]
        ]);
    }
}
