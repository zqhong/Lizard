<?php


/*
        // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout');

        // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm');
        $this->post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/
class LoginControllerTest extends TestCase
{
    /**
     * Test for show login form.
     */
    public function testShowLoginForm()
    {
        $this->visit('/login')
            ->see('Login');
    }

    /**
     * Test for do login action.
     */
    public function testLogin()
    {
        $this->visit('/login')
            ->type('admin@lizard.app', 'email')
            ->type('admin', 'password')
            ->press('Login')
            ->seePageIs('/home')
            ->see('You are logged in');
    }
}
