<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReadKebijakanPrivasi extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/registrasi')
                    ->pause(2000)
                    ->clickLink('Pelajari Lebih Lanjut')
                    ->pause(2000)
                    ->assertPathIs('/kebijakanprivasi')
                    ;
        });
    }
}
