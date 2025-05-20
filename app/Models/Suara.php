<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suara extends Model
{
    use HasFactory;

    protected $table = 'suara';
    protected $primaryKey = 'suara_id';

    protected $fillable = [
        'users_id',
        'calon_id',
        'pemilihan_id',
    ];

    // Relasi ke User (pemilih)
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }

    // Relasi ke Calon
    public function calon()
    {
        return $this->belongsTo(Calon::class, 'calon_id', 'calon_id');
    }

    // Relasi ke Pemilihan
    public function pemilihan()
    {
        return $this->belongsTo(Pemilihan::class, 'pemilihan_id', 'pemilih_id');
    }
}
