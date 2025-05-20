<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilihan extends Model
{
    use HasFactory;

    protected $table = 'pemilihan';
    protected $primaryKey = 'pemilih_id';

    protected $fillable = [
        'users_id',
        'jenis_pemilihan',
        'nama_pemilihan',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}
