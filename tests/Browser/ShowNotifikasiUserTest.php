<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNotifikasiUserTest extends DuskTestCase
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
                    ->pause(2000)
                    ->type('password', '456')
                    ->pause(2000)
                    ->press('masuk')
                    ->pause(2000)
                    ->assertPathIs('/dashboard')
                    ->pause(2000)
                    ->visit('/notifikasi')
                    ->pause(2000)
                    ->press('Donasi baju APPROVED oleh pihak BagiBarang')
                    ->pause(2000);
        });
    }
}
