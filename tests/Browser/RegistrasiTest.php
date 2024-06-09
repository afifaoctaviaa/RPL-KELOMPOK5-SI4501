<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/registrasi')
                    ->pause(2000)
                    ->type('full_name', 'afifa octavia')
                    ->pause(2000)
                    ->type('username', 'afifi')
                    ->pause(2000)
                    ->type('email', 'afifa@gmail.com')
                    ->pause(2000)
                    ->type('telpon', '0833')
                    ->pause(2000)
                    ->type('password', '123')
                    ->pause(2000)
                    ->press('Daftar Sekarang')
                    ->pause(2000);
        });
    }
}
