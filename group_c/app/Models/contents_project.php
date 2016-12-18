<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contents_project extends Model {

    protected $table = 'contents_project';
    protected $primaryKey = 'content_project_id';
    public $timestamps = false;
    protected $fillable = [
        'content_project_title',
        'content_project_img1',
        'content_project_img2',
        'content_project_img3',
    ];
    protected $guarded = ['content_project_id'];

    public function getData() {
        return self::paginate();
    }

}
