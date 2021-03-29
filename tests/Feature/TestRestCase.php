<?php

namespace Tests\Feature;

class TestRestCase extends TestCase
{
    public $source = '/';

    public function search($params)
    {
        $response = $this->withToken($this->token)->json('GET', $this->source , $params);
        $response->assertStatus(200)->assertJsonPath('status_code', 200);
        return $response;
    }

    public function view($id)
    {
        $response = $this->withToken($this->token)->json('GET', $this->source . "/{$id}");
        $response->assertStatus(200)->assertJsonPath('status_code', 200)->assertJsonStructure([
            'status_code',
            'message',
            'data',
        ]);
        return $response;
    }

    public function create($data)
    {
        $response = $this->withToken($this->token)->json('POST', $this->source , $data);
        $response->assertStatus(200)->assertJsonPath('status_code', 200)->assertJsonStructure([
            'status_code',
            'message',
            'data',
        ]);
        return $response;
    }

    public function edit($id,$data)
    {
        $response = $this->withToken($this->token)->json('PUT', $this->source . "/{$id}", $data);
        $response->assertStatus(200)->assertJsonPath('status_code', 200)->assertJsonStructure([
            'status_code',
            'message',
            'data',
        ]);
        return $response;
    }

    public function del($id)
    {
        $response = $this->withToken($this->token)->json('DELETE', $this->source . "/{$id}");
        $response->assertStatus(200)->assertJsonPath('status_code', 200);
        return $response;
    }
}
