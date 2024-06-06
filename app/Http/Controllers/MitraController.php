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
            'nama_organisasi' => 'required|string|max:255',
            'alamat_organisasi' => 'required|string|max:255',
            'telepon_organisasi' => 'required|string|max:20',
            'email_organisasi' => 'required|email|max:255',
            'website_organisasi' => 'nullable|url|max:255',
            'nama_kontak_person' => 'required|string|max:255',
            'jabatan_kontak_person' => 'required|string|max:255',
            'telepon_kontak_person' => 'required|string|max:20',
            'email_kontak_person' => 'required|email|max:255',
            'dokumen_legalitas' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240',
            'proposal_program' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'laporan_keuangan' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);
        
        
        // Prepare data for database
        $dataToUpdate = $request->except(['dokumen_legalitas', 'proposal_program', 'laporan_keuangan']);
        
        // Upload dokumen_legalitas
    if ($request->hasFile('dokumen_legalitas')) {
        $dokumenLegalitas = $request->file('dokumen_legalitas');
        $dokumenLegalitasName = 'dokumen_legalitas_' . time() . '.' . $dokumenLegalitas->getClientOriginalExtension();
        $dokumenLegalitas->move(public_path('storage/dokumen_legalitas'), $dokumenLegalitasName);
        $dataToUpdate['dokumen_legalitas'] = $dokumenLegalitasName;
    }

    // Upload proposal_program
    if ($request->hasFile('proposal_program')) {
        $proposalProgram = $request->file('proposal_program');
        $proposalProgramName = 'proposal_program_' . time() . '.' . $proposalProgram->getClientOriginalExtension();
        $proposalProgram->move(public_path('storage/proposal_program'), $proposalProgramName);
        $dataToUpdate['proposal_program'] = $proposalProgramName;
    }
    
    // Upload laporan_keuangan
    if ($request->hasFile('laporan_keuangan')) {
        $laporanKeuangan = $request->file('laporan_keuangan');
        $laporanKeuanganName = 'laporan_keuangan_' . time() . '.' . $laporanKeuangan->getClientOriginalExtension();
        $laporanKeuangan->move(public_path('storage/laporan_keuangan'), $laporanKeuanganName);
        $dataToUpdate['laporan_keuangan'] = $laporanKeuanganName;
    }
    
    // Insert data into database
    Mitra::create(array_merge($dataToUpdate, ['user_id' => $request->user()->id]));

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
        'nama_organisasi' => 'required|string|max:255',
        'alamat_organisasi' => 'required|string|max:255',
        'telepon_organisasi' => 'required|string|max:20',
        'email_organisasi' => 'required|email|max:255',
        'website_organisasi' => 'nullable|url|max:255',
        'nama_kontak_person' => 'required|string|max:255',
        'jabatan_kontak_person' => 'required|string|max:255',
        'telepon_kontak_person' => 'required|string|max:20',
        'email_kontak_person' => 'required|email|max:255',
        'dokumen_legalitas' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240',
        'proposal_program' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        'laporan_keuangan' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
    ]);

    $pengajuan = Mitra::findOrFail($id);

    // Prepare data for database update
    $dataToUpdate = $request->except(['dokumen_legalitas', 'proposal_program', 'laporan_keuangan']);

    // Upload dokumen_legalitas
    if ($request->hasFile('dokumen_legalitas')) {
        $dokumenLegalitas = $request->file('dokumen_legalitas');
        $dokumenLegalitasName = 'dokumen_legalitas_' . time() . '.' . $dokumenLegalitas->getClientOriginalExtension();
        $dokumenLegalitas->move(public_path('storage/dokumen_legalitas'), $dokumenLegalitasName);
        $dataToUpdate['dokumen_legalitas'] = $dokumenLegalitasName;
    }

    // Upload proposal_program
    if ($request->hasFile('proposal_program')) {
        $proposalProgram = $request->file('proposal_program');
        $proposalProgramName = 'proposal_program_' . time() . '.' . $proposalProgram->getClientOriginalExtension();
        $proposalProgram->move(public_path('storage/proposal_program'), $proposalProgramName);
        $dataToUpdate['proposal_program'] = $proposalProgramName;
    }

    // Upload laporan_keuangan
    if ($request->hasFile('laporan_keuangan')) {
        $laporanKeuangan = $request->file('laporan_keuangan');
        $laporanKeuanganName = 'laporan_keuangan_' . time() . '.' . $laporanKeuangan->getClientOriginalExtension();
        $laporanKeuangan->move(public_path('storage/laporan_keuangan'), $laporanKeuanganName);
        $dataToUpdate['laporan_keuangan'] = $laporanKeuanganName;
    }

    // Update data in the database
    $pengajuan->update($dataToUpdate);

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
