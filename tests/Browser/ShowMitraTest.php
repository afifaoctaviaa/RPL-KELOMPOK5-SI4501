<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowMitraTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
<<<<<<< HEAD
                ->assertSee('Muhamadiyah')
                ->pause(2000)
                ->clickLink('Muhamadiyah')
                ->pause(2000)
                ->assertPathIs('/mitra/2')
                ->pause(2000)
                ->clickLink('Kembali')
                ->pause(2000);
=======
                    ->assertSee('Muhamadiyah')
                    ->pause(2000)
                    ->clickLink('Muhamadiyah')
                    ->pause(2000)
                    ->assertPathIs('/mitra/2')
                    ->pause(2000)
                    ->clickLink('Kembali')
                    ->pause(2000);
>>>>>>> 4b903dc0cafe52dec0ec4d39e2aa387d0b99ff95
        });
    }
}
