<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

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

    public function showdata()
    {
        $showdata = Donasi::all();
        return view('admin.confirmation-update-donasi',['status_donasis'=>$showdata]);
    }

    public function update(Request $request, $id){
        $statusupdate = Donasi::find($id);
        if ($request->has('approve')) {
            $statusupdate->status = 'APPROVED';
        } elseif ($request->has('reject')) {
            $statusupdate->status = 'REJECT';
        }
        $statusupdate->update();
        return redirect('admin.riwayat-donasi-admin')->with('message', 'Data updated Successfully');
    }
}
