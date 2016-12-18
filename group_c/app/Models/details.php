<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class details extends Model
{
    protected $table = 'details';
    protected $primaryKey = 'detail_id';
    public $timestamps = false;
    protected $fillable = [
      'detail_title',
      'detail_img',
      'detail_price',
        'detail_price_del',
    ];
    protected $guarded = ['detail_id'];
    
    public function getData(){
        return self::paginate();
    }
}