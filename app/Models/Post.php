<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'image']; // Adicionando fillable para permitir mass assignment
}