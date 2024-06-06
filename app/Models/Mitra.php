<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_organisasi',
        'alamat_organisasi',
        'telepon_organisasi',
        'email_organisasi',
        'website_organisasi',
        'nama_kontak_person',
        'jabatan_kontak_person',
        'telepon_kontak_person',
        'email_kontak_person',
        'dokumen_legalitas',
        'proposal_program',
        'laporan_keuangan',
        'status'
    ];
}
