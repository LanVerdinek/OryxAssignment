<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Ime
    protected $table = 'posts'; //ime tabele

    // Primary ključ
    public $primaryKey = 'id';

    // Časovni žig
    public $timestamps = true;
}
