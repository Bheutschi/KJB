<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /**
     * Test that the login page displays the expected fields.
     */
    public function test_login_page_displays_expected_fields(): void
    {
        $response = $this->get('/');

        $response->assertSee('email');
        $response->assertSee('password');
        $response->assertSee('Login');
    }
}
