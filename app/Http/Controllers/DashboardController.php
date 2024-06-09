<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use App\Models\Notification;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //Function untuk menampilkan Dashboard Admin
    public function admin()
    {
        $donasi = Donasi::all();
        $artikels = Article::orderByDesc('created_at')->take(5)->get();
        return view('dashboard.index-admin', compact('donasi','artikels'));
    }
    //Function untuk menampilkan Dashboard User
    public function index()
    {

        $notifications = Notification::select(['judul', 'created_at'])->orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->take(5)->get();
        $donasi = Donasi::where('user_id', Auth::user()->id)->get();
        $artikels = Article::orderByDesc('created_at')->take(1)->get();
        return view('dashboard.index-users', compact('notifications','artikels','donasi'));
    }

    //Function untuk menampilkan Riwayat Donasi
    public function indexriwayatdonasi()
    {
        return view('donasi.riwayatdonasi');
    }

}
