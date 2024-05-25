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
        $responseMock = $this->get('/');

        $responseMock->assertSee('email');
        $responseMock->assertSee('password');
        $responseMock->assertSee('Login');
    }
}
