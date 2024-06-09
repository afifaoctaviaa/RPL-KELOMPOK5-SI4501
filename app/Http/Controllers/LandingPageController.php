<?php

namespace App\Http\Controllers;



use App\Models\Mitra;
use App\Models\Notification;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //Function untuk menampilkan Dashboard Admin
  
    //Function untuk menampilkan Dashboard User
    public function index()
    {
        $mitras = Mitra::get();
        return view('landingpage', compact('mitras'));
    }

    //Function untuk menampilkan Riwayat Donasi
    public function mitra( $id)
    {
        $mitras =  Mitra::findOrFail($id);

        return view('mitra', compact('mitras'));
    }

}
