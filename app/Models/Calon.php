<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    use HasFactory;

    protected $table = 'calon';
    protected $primaryKey = 'calon_id';

    protected $fillable = [
        'users_id',
        'pemilih_id',
        'img_calon',
        'visi',
        'misi',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }

    // Relasi ke Pemilihan
    public function pemilihan()
    {
        return $this->belongsTo(Pemilihan::class, 'pemilih_id', 'pemilih_id');
    }
}
