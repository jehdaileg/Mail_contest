<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MailInsertionTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

   public function email_can_be_entered_in_constests_table()
   {
       $this->withDeprecationHandling();

       $this->post('/contest', [
            'email' => 'abc@example.com'
       ]);

       $this->assertDatabaseCount('contests', 1);
   }

   public function email_is_required()
   {
       $this->withDeprecationHandling();

       $this->post('/contest', [
        'email' => ''
       ]);

       $this->assertDatabaseCount('contests', 0);
   }
}
