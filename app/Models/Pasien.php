<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany; // <- Typo sebelumnya: HashMany
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    /**
     * Relasi Pasien memiliki banyak data pendaftaran.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function daftar(): HasMany
    {
        return $this->hasMany(Daftar::class);
    }

    public $timestamps = true;

    // Tidak perlu set guarded dan fillable sekaligus, cukup satu.
    // Disarankan gunakan fillable:
    protected $fillable = [
        'no_pasien',
        'nama',
        'umur',
        'jenis_kelamin',
        'alamat',
    ];

    // Table bisa di-set jika nama tabel tidak sesuai konvensi
    protected $table = 'pasiens';
}
