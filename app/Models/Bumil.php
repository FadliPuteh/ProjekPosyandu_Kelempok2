<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'usia_kandungan',
        'gejala',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
