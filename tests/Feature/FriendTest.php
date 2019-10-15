<?php

namespace Tests\Feature;

use App\Friend;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FriendTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_see_friend_with_age()
    {
        $f = factory(Friend::class)->create();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee($f->name, $f->email, $f->age);
    }
}
