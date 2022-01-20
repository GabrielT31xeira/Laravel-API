<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestado extends Model
{
    use HasFactory;

    protected $fillabe = [
        'emprestado'
    ];

    public function livro()
    {
        return $this->hasOne(Livro::class);
    }
}
