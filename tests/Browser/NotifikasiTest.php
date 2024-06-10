<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotifikasiTest extends DuskTestCase
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
                    ->pause(2000) 
                    ->type('password', '123')
                    ->pause(2000) 
                    ->press('masuk')
                    ->pause(2000) 
                    ->assertPathIs('/dashboardadmin')
                    ->pause(2000)
                    ->visit('/verifikasi')
                    ->pause(2000)
                    ->visit('/verifikasi-update/5')
                    ->pause(2000)
                    ->press('APPROVE')
                    ->pause(2000)
                    ->type('alamat', 'Jl.Mengger2')
                    ->pause(2000)
                    ->press('Submit')
                    ->pause(2000);
        });
    }
}
