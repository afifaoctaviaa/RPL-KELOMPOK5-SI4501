<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;



class ConfirmationController extends Controller
{   
    public function confirmation()
    {
        return view('admin.confirmation-update-donasi');
    }

    public function getdata()
    {
        return view ('admin.riwayat-donasi-admin',[
            'donasis' => Donasi::all()
        ]);
    }



    public function showdata($id)
    {
        $verif = Donasi::where('id', $id)->first();
        return view('admin.confirmation-update-donasi', compact('verif'));
    }

    public function update(Request $request, $id){
        $donasi = Donasi::find($id);
        $donasi->status = $request->status;

        $judul = "Donasi {$donasi->nama_barang} {$donasi->status} oleh pihak BagiBarang";
        $desc = $donasi->status == "REJECT" ? "Anda dapat mengajukan kembali donasi barang yang ingin anda donasikan." : "Anda dapat mengirimkan barang yang akan didonasikan pada alamat berikut:";

        Notification::create([
            'user_id' => $donasi->user_id,
            'judul' => $judul,
            'description' => $desc,
            'alamat' => $request->alamat
        ]);

        $donasi->update();

        return redirect('/verifikasi')->with('message', 'Data updated Successfully');
    }
}
