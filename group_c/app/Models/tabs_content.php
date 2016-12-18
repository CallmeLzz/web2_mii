<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tabs_content extends Model {

    protected $table = 'tabs_content';
    protected $primaryKey = 'tab_content_id';
    public $timestamps = false;
    protected $fillable = [
        'tab_content_title_1',
        'tab_content_title_2',
        'tab_content_description_1',
        'tab_content_description_2',
    ];
    protected $guarded = ['tab_content_id'];

    public function getData() {
        return self::paginate();
    }

}
