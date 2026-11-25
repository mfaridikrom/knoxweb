<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Biodata extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
    ];

    public function getFotoUrlAttribute(): string
    {
        if (! $this->foto) {
            return 'https://ui-avatars.com/api/?name=' . urlencode($this->nama) . '&size=500&background=e9ecef&color=495057';
        }

        if (Str::startsWith($this->foto, ['http://', 'https://'])) {
            return $this->foto;
        }

        if (Str::startsWith($this->foto, 'images/')) {
            return asset($this->foto);
        }

        return asset('storage/' . $this->foto);
    }
}
