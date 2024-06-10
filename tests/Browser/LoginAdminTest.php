<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginAdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->pause(2000)
                    ->type('username', 'admin')
                    ->pause(2000) // Ensure this matches the 'name' attribute of the username field
                    ->type('password', '123')
                    ->pause(2000) // Ensure this matches the 'name' attribute of the password field
                    ->press('masuk')
                    ->pause(2000) // Ensure this matches the text or selector of the submit button
                    ->assertPathIs('/dashboardadmin')
                    ->pause(2000);
        });
    }
}
