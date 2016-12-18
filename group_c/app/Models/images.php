<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class images extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'image_id';
    public $timestamps = false;
    protected $fillable = [
      'image_url',
    
    ];
    protected $guarded = ['image_id'];
}