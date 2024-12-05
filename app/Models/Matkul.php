<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matkul extends Model
{
    protected $table = 'matkul';

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class, 'matkul_id', 'id');
    }
}
