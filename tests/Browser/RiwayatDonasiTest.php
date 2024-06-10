<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RiwayatDonasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void 
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->pause(2000)
                    ->type('username', 'azka')
                    ->pause(2000) // Ensure this matches the 'name' attribute of the username field
                    ->type('password', '456')
                    ->pause(2000) // Ensure this matches the 'name' attribute of the password field
                    ->press('masuk')
                    ->pause(2000) // Ensure this matches the text or selector of the submit button
                    ->assertPathIs('/dashboard')
                    ->pause(2000)
                    ->visit('/riwayat-donasi')
                    ->pause(2000)
                    ->clickLink('Delete')
                    ->pause(2000);
        });
    }
}
