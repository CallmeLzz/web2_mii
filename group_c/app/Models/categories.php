<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected  $table = 'categories';
    protected  $primaryKey = 'categorie_id';
    public $timestamps = false;
    protected $filltable = [
        'categorie_c1',
        'categorie_c2',
    ];
    protected $quarded = ['categorie_id'];
    
    public function getData() {
        return self::paginate(2);
    }
}
