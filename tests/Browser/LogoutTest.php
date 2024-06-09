<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/login')
            ->pause(2000)
            ->type('username','bagibarang')
            ->pause(2000)
            ->type('password','bagibarang')
            ->pause(2000)
            ->press('masuk')
            ->pause(2000)
            ->assertPathIs('/dashboard')
            ->pause(2000)
            ->press('Pengaturan')
            ->pause(2000)
            ->press('LogOut')
            ->pause(2000)
            ->visit('/');
        });
    }
}
