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
     * Login page test.
     *
     * @return void
     */
    public function testLoginLoads()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * Password reset page test.
     *
     * @return void
     */
    public function testPasswordResetLoads()
    {
        $response = $this->get('/password/reset');

        $response->assertStatus(200);
    }

    /**
     * Register page test.
     *
     * @return void
     */
    public function testRegisterLoads()
    {
        $response = $this->get('/register');

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
