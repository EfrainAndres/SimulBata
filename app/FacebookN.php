<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookN extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'comentario', 'tokens', 'tema'
    ];
}
