<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TentangKamiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
             // Klik tautan Fitur Tentang Kami
            $browser->visit('/')
            ->clickLink('Tentang Kami')
            ->assertPathIs('/tentangkami')
            ->clickLink('Daftar Sekarang')
            ->assertPathIs('/registrasi');
           

        });
    }
}
