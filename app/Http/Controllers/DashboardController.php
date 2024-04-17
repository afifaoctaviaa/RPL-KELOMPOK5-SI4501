<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function untuk menampilkan Dashboard Admin
    public function admin()
    {
        return view('dashboard.index-admin');
    }
    //Function untuk menampilkan Dashboard User
    public function index()
    {
        return view('dashboard.index-users');
    }

    //Function untuk menampilkan Riwayat Donasi
    public function indexriwayatdonasi()
    {
        return view('donasi.riwayatdonasi');
    }

}