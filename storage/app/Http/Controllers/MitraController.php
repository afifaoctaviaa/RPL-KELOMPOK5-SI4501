<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuans = Mitra::where('user_id', Auth::user()->id)->get();
        return view('pengajuanmitra.index', compact('pengajuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengajuanmitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alamat' => 'required'
        ]);

        Mitra::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pengajuanmitra.index')
                         ->with('success', 'Pengajuan mitra berhasil diajukan.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajuans = Mitra::findOrFail($id);
        return view('pengajuanmitra.show', compact('pengajuans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengajuans = Mitra::findOrFail($id);
        return view('pengajuanmitra.edit', compact('pengajuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alamat' => 'required'
        ]);

        $pengajuan = Mitra::findOrFail($id);
        $pengajuan->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pengajuanmitra.index')
                         ->with('success', 'Pengajuan mitra berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengajuan = Mitra::findOrFail($id);
        $pengajuan->delete();

        return redirect()->route('pengajuanmitra.index')
                         ->with('success', 'Pengajuan mitra berhasil dihapus.');
    }
}
