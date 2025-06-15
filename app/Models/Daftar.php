<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Daftar extends Model
{
    /** @use HasFactory<\Database\Factories\DaftarFactory> */
    use HasFactory;
    protected $guarded = [];

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
