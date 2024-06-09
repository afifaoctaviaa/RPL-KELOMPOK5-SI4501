<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PengajuanMitraTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Donasi Sekarang')
                    ->visit('/login')
                    ->pause(1000)
                    ->type('username','riri')
                    ->type('password','riri')
                    ->press('masuk')
                    ->pause(1000)
                    ->assertPathIs('/dashboard')
                    ->clickLink('Pengajuan Mitra')
                    ->assertPathIs('/pengajuanmitra')

                    
                    // ->clickLink('Buat Pengajuan Baru')
                    // //form1
                    // ->assertPathIs('/pengajuanmitra/create')
                    // ->type('nama_organisasi','KitaBisa')
                    // ->type('alamat_organisasi','Jl.KitaBisa')
                    // ->type('telepon_organisasi','08111')
                    // ->type('email_organisasi','KitaBisa@gmail.com')
                    // ->type('website_organisasi','www.KitaBisa.com')
                    // ->clickLink('Selanjutnya')
                    // ->assertPathIs('/pengajuanmitra/create')
                    // //form2
                    // ->type('nama_kontak_person','riri')
                    // ->type('jabatan_kontak_person','Mahasiswa')
                    // ->type('telepon_kontak_person','08123')
                    // ->type('email_kontak_person','riri@gmail.com')
                    // ->clickLink('Selanjutnya')
                    // //form3
                    // ->attach('dokumen_legalitas', public_path('/images/SPM1717556209.pdf'))
                    // ->attach('proposal_program', public_path('/images/SPM1717556209.pdf'))
                    // ->attach('laporan_keuangan', public_path('/images/SPM1717556209.pdf'))
                    // ->attach('foto_mitra', public_path('/images/foto donasi.png'));
                    // ->pause(1000)
                    // ->press('Submit');
                    // ->asserPathIs('/pengajuanmitra');

                    //edit
                    ->assertSee('Edit')
                    ->clickLink('Edit')
                    ->waitForLocation('/pengajuanmitra/5/edit', 10)
                    ->assertPathIs('/pengajuanmitra/5/edit')
                    ->type('nama_kontak_person','Rirismt')
                    ->press('Submit')

                    // //  hapus
                    // ->assertSee('Hapus')
                    // ->press('Hapus')
                    // ->assertPathIs('/pengajuanmitra')
                    ;
        });
    }
}
