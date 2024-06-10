<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ArtikelAdminTest extends DuskTestCase
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
                    ->pause(2000) // Ensure this matches the 'name' attribute of the username field
                    ->type('password', '123')
                    ->pause(2000) // Ensure this matches the 'name' attribute of the password field
                    ->press('masuk')
                    ->pause(2000) // Ensure this matches the text or selector of the submit button
                    ->assertPathIs('/dashboardadmin')
                    ->pause(2000)
                    ->visit('/artikel')
                    ->pause(2000)
                    ->visit('artikel/tambah')
                    ->pause(2000)
                    ->type('judul', 'Donasi Keren')
                    ->pause(2000)
                    ->type('sumber', 'raudhah.com')
                    ->pause(2000)
                    ->script([
                        "document.querySelector('.ql-editor').innerHTML = 'Kasihani saya';"
                    ]);
                    $browser->pause(2000)
                            ->attach('#foto', __DIR__.'/file/1716987149.jpg') // Pastikan path file dan nama field sesuai
                            ->pause(2000)
                            ->press('Posting')
                            ->pause(2000)
                            ->assertSee('Artikel berhasil ditambahkan')
                            ->pause(2000);
        });
    }
}
