<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReadFaqTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            // Membaca tentang FAQ sebagai User
            $browser->visit('/login')
                    ->pause(2000)
                    ->type('username', 'jasmine')
                    ->pause(2000)
                    ->type('password', 'abcde')
                    ->pause(2000)
                    ->press('masuk')
                    ->pause(2000)
                    ->assertPathIs('/dashboard')
                    ->pause(2000)
                    ->clickLink('FAQs')
                    ->pause(2000)
                    ->visit('/faq')
                    ->pause(2000);
        });
    }
}
