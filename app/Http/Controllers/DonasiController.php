<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'nama_barang.*' => 'required',
            'kategori_barang.*' => 'required',
            'detail_barang.*' => 'required',
            'foto_barang.*' => 'required',
        ]);

        for($i=0;$i<$request->jumlah_barang;$i++) {
            
            // Simpan foto barang
            $filename = time().'.' . $request->file('foto_barang')[$i]->getClientOriginalExtension();
            $path = storage_path('app/public/barang');
            $request->file('foto_barang')[$i]->move($path, $filename);

            Donasi::create([
                'user_id' => $request->user()->id,
                'nama_barang' => $request->nama_barang[$i],
                'kategori_barang' => $request->kategori_barang[$i],
                'detail_barang' => $request->detail_barang[$i],
                'foto_barang' => $filename
            ]);
        }

        return redirect('/tambah-donasi')->with('status', 'Berhasil menambahkan donasi barang!');

    }

    public function showdonasi(){

        return view ('donasi.riwayatdonasi',[
            'donasis' => Donasi::all()
        ]);
    }

    public function deletedonasi($id){
        $deletedonasi = Donasi::find($id);
        $deletedonasi->delete();
        session()->flash('deletedMessage', 'Data Deleted Succesfully');
        return redirect('/riwayat-donasi');
    }
}
