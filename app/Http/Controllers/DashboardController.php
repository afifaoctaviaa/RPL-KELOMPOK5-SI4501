<?php

namespace App\Http\Controllers;


use App\Models\Donasi;
use App\Models\Notification;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function untuk menampilkan Dashboard Admin
    public function admin()
    {

        $donasi = Donasi::all();
        return view('dashboard.index-admin', compact('donasi'));
    }
    //Function untuk menampilkan Dashboard User
    public function index()
    {

        $notifications = Notification::select(['judul', 'created_at'])->orderBy('created_at', 'DESC')->take(5)->get();
        return view('dashboard.index-users', compact('notifications'));
    }

    //Function untuk menampilkan Riwayat Donasi
    public function indexriwayatdonasi()
    {
        return view('donasi.riwayatdonasi');
    }

}

