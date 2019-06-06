<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestPagesTest extends TestCase
{
    /**
     * Homepage test.
     *
     * @return void
     */
    public function testHomepageLoads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Dashboard test for guest access.
     *
     * @return void
     */
    public function testDashboardLoads()
    {
        $response = $this->get('/home'); //try and visit logged in page should redirect to login

        $response->assertStatus(302);
    }
}
