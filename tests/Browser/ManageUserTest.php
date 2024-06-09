<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ManageUserTest extends DuskTestCase
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
            ->pause(2000) 
            ->type('password', '123')
            ->pause(2000) 
            ->press('masuk')
            ->pause(2000) 
            ->assertPathIs('/dashboardadmin')
            ->pause(2000)
            ->visit('/manageuser')
            ->pause(2000)
            ->press('View')
            ->pause(2000)
            ->press('Back to Users')
            ->pause(2000)
            ->press('Delete')
            ->pause(2000);
        });
    }
}
