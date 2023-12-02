<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur_balita',
        'jenis_imunisasi',
        'nama_ortu',
        'alamat'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
