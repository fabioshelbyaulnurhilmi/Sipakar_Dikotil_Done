<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'username',
        'nilai',
        'saran'
    ];
    public function komenUser()
{
    return $this->belongsTo(User::class, 'idUser', 'idUser');
}

    protected $casts = [
        'tanggal' => 'datetime',
        // 'idUser' => 'string',
    ];

    protected $dates = ['tanggal'];
}
