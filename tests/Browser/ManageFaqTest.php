<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ManageFaqTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/')
                    // ->clickLink('Donasi Sekarang')
                    // ->visit('/login')
                    // ->pause(1000)
                    // ->type('username','admin')
                    // ->type('password','123')
                    // ->press('masuk')
                    // ->pause(1000)
                    // ->assertPathIs('/dashboardadmin')
                    // ->clickLink('Check FAQ')
                    // ->pause(1000)
                    // ->assertPathIs('/manageFaq')

            $browser->visit('/manageFaq');
                    //add FAQ
                    // ->clickLink('Add')
                    // ->visit('/addFaqPage')
                    // ->pause(1000)
                    // ->assertSee('Header')
                    // ->type('Header','asdfjndslavkla')
                    // ->type('Content','adbfjsjkcnncsands')
                    // ->press('Add FAQ')
                    // ->assertPathIs('/manageFaq');

                    //edit
                    // ->assertSee('Action')
                    // ->clickLink('Edit')
                    // ->visit('/updateFaq')
                    // ->type('Header','updatebaru');
                    // ->type('Content','cekupdate');
                    // ->press('Update FAQ');

                    // // delete
                    // ->assertSee('Action')
                    // ->clickLink('Hapus');

        });
    }
}
