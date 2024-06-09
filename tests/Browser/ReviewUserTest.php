<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReviewUserTest extends DuskTestCase
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
            ->type('username', 'bagibarang')
            ->pause(2000)
            ->type('password', 'bagibarang')
            ->pause(2000)
            ->press('masuk')
            ->pause(2000)
            ->assertPathIs('/dashboard')
            ->pause(2000)
            ->clickLink('Review')
            ->pause(2000)
            ->press('Berikan Ulasan!')
            ->pause(2000)
            ->type('rating', '5')
            ->pause(2000)
            ->type('comment', 'Aplikasi Sangat Baik dan Bermanfaat!')
            ->pause(2000)
            ->scrollTo('button[type="submit"].btn.btn-primary') // Scroll ke tombol
            ->pause(2000) // Tunggu sejenak setelah scroll
            ->waitFor('button[type="submit"].btn.btn-primary', 5) // Tunggu sampai tombol terlihat
            ->press('Kirim Ulasan') // Tekan tombol
            ->pause(2000);
        });
    }
}
