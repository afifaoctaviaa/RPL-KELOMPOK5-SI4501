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
                    ->assertSee('Muhamadiyah')
                    ->pause(2000)
                    ->clickLink('Muhamadiyah')
                    ->pause(2000)
                    ->assertPathIs('/mitra/2')
                    ->pause(2000)
                    ->clickLink('Kembali')
                    ->pause(2000);
        });
    }
}
