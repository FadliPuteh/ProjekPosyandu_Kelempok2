<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'gejala',
        'alamat',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
