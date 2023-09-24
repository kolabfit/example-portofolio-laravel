<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolios';

    protected $fillable = [
        'judul_porto',
        'tahun',
        'deskripsi',
        'url',
        'kategori_id',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
