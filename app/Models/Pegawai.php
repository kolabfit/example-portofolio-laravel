<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';

    protected $fillable = [
        'nip',
        'nama',
        'nohp',
        'alamat',
        'porto_id',
    ];

    public function portofolio(): BelongsTo
    {
        return $this->belongsTo(Portofolio::class, 'porto_id');
    }
}
