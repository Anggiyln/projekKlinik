<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nicolaslopezj\Searchable\SearchableTrait;

class Daftar extends Model
{
    /** @use HasFactory<\Database\Factories\DaftarFactory> */
    use SearchableTrait;
    use HasFactory;
    protected $guarded = [];

    protected $searchable = [

        'columns' => [
            'pasiens.nama' => 10,
            'pasiens.no_pasien' => 10,
            'poli.nama' => 2,

        ],
        'joins' => [
            'pasiens' => ['pasiens.id','daftars.pasien_id'],
            'poli'=> ['poli.id','daftars.poli_id'],
        ],
    ];


    /**
     * Get the user that owns the Daftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class)->withDefault();
    }

    public function poli()
{
    return $this->belongsTo(Poli::class);
}
}
