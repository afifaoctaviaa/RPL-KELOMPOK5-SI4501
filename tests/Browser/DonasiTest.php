<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DonasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->pause(2000)
                    ->type('username', 'azka')
                    ->pause(2000)
                    ->type('password', '456')
                    ->pause(2000)
                    ->press('masuk')
                    ->pause(2000)
                    ->assertPathIs('/dashboard')
                    ->pause(2000)
                    ->visit('/tambah-donasi')
                    ->pause(2000)
                    ->type('#jumlah_barang', '1') // Asumsikan kita mendonasikan 1 barang
                    ->pause(2000)
                    ->clickLink('Selanjutnya')
                    ->pause(2000)
                    ->type('nama_barang[]', 'baju')
                    ->pause(2000)
                    ->select('kategori_barang[]', 'Baju')
                    ->pause(2000)
                    ->type('detail_barang[]', 'kokoko')
                    ->pause(2000)
                    ->attach('foto_barang[]', __DIR__.'/file/1716987149.jpg') // Pastikan path dan nama field sesuai
                    ->pause(2000)
                    ->press('Selanjutnya')
                    ->pause(2000)
                    ->assertSee('Donasi berhasil ditambahkan')
                    ->pause(1000);
        });
    }
}
