<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetsN extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'localidad', 'tema','usuario','tokens'
    ];
}
