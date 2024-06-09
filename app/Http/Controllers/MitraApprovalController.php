<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuans = Mitra::all();
        return view('approvalmitra.index', compact('pengajuans'));
    }

    /**
     * Show the form for approving or rejecting a specific resource.
     */
    public function show(string $id)
    {
        $pengajuan = Mitra::findOrFail($id);
        return view('mitra.show', compact('pengajuan'));
    }

    /**
     * Update the status of the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
            'approval_notes' => 'nullable|string|max:255',
        ]);

        $pengajuan = Mitra::findOrFail($id);
        $pengajuan->update([
            'status' => $request->status,
            'approval_notes' => $request->approval_notes,
        ]);

        return redirect()->route('mitra.index')
                         ->with('success', 'Status pengajuan mitra berhasil diperbarui.');
    }
}
