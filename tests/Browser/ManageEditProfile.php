<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ManageEditProfile extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->pause(2000)
            ->clickLink('Login')
            ->pause(2000)
            ->assertPathIs(('/login'))
            ->pause(2000)
            ->type('username', 'fifi')
            ->pause(2000)
            ->type('password', 'afifi')
            ->pause(2000)
            ->press('masuk')
            ->pause(2000)
            ->assertPathIs('/dashboard')
            ->pause(2000)
            ->press('Pengaturan')
            ->pause(2000)
            ->clickLink('Edit Profil')
            ->pause(2000)
            ->assertPathIs('/profile')
            ->type('nama', 'Jasmine')
            ->pause(2000)
            ->type('telpon', '78910')
            ->pause(2000)
            ->press('Save')
            ->pause(2000)
            ->assertSee('Profile berhasil diperbarui!');
        });
    }
}
