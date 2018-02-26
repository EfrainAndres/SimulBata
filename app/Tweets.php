<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweets extends Model
{
    protected $connection = 'info';
    protected $table = 'tweets';

    protected $primaryKey = "id";
    protected $fillable = ['id','tweet'];

}
