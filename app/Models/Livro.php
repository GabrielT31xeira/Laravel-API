<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillabe = [
        'isnb','titulo','resumo','data_publi','created_at','updated_at'
    ];

    protected $casts = [
        'data_publi' => 'date:d-m-Y',
        'created_at' => 'datetime:d-m-Y H:00',
        'updated_at' => 'datetime:d-m-Y H:00',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function emprestado()
    {
        return $this->belongsTo(Emprestado::class);
    }
}
