<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowArtikelTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->pause(2000)
            ->type('username', 'revan12')
            ->pause(2000)
            ->type('password', '1234')
            ->pause(2000)
            ->press('masuk')
            ->pause(2000)
            ->assertPathIs('/dashboard')
            ->pause(2000)
            ->clickLink('Selengkapnya')
            ->pause(2000)
            ->visit('/show-artikel')
            ->pause(2000);
        });
    }
}
