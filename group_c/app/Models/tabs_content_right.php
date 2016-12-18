<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tabs_content_right extends Model {

    protected $table = 'tabs_content_right';
    protected $primaryKey = 'tab_content_right_id';
    public $timestamps = false;
    protected $fillable = [
        'tab_content_right_iconleft',
        'tab_content_right_title',
        'tab_content_right_iconright',
        'tab_content_right_description',
    ];
    protected $guarded = ['tab_content_right_id'];

    public function getData() {
        return self::paginate();
    }

}
