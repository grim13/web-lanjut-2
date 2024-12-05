<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected $table = 'kelas';
    //
    public function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class, 'matkul_id');
    }
}
