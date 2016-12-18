<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class logo_images extends Model {

    protected $table = 'logo_images';
    protected $primaryKey = 'logo_image_id';
    public $timestamps = false;
    protected $fillable = [
        'logo_image_pic1',
        'logo_image_pic2',
        'logo_image_pic3',
        'logo_image_pic4',
        'logo_image_pic5',
    ];
    protected $guarded = ['logo_image_id'];

    public function getData() {
        return self::paginate();
    }
}
