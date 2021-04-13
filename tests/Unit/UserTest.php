<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
   /** @test */
   function user_can_generate_gravatar_default_image_when_no_email_found()
   {
       $user = User::factory()->create([
           'name' => 'Andre',
           'email' => 'afakemail@fakemail.com'
       ]);
   }
}
