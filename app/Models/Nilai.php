<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'guru_id',
        'nilai',
        'semester',
        'tahun_ajaran',
    ];

    // ✅ Relasi ke tabel siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    // ✅ Relasi ke tabel mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    // (Opsional) Jika kamu juga ingin tahu guru yang input
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }
}
