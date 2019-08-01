<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountsTest extends TestCase
{
   public function test_for_account(){
    $response = $this->get('/');

    $response->assertStatus(200);
   }
}
