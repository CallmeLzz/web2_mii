<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contents_number extends Model {

    protected $table = 'contents_number';
    protected $primaryKey = 'content_number_id';
    public $timestamps = false;
    protected $fillable = [
        'content_number_num',
        'content_number_title',
    ];
    protected $guarded = ['content_number_id'];

    public function getData() {
        return self::paginate(3);
    }

    public function getID($id){
        return self::where('content_number_id', $id)->get();
    }
    
    public function exportContent_number(){
        return contents_number::all();
    }
    
    
    public function editProduct($id, $num, $title){    
            self::where('content_number_id', $id)->update(array(
                'content_number_num' => $num,
                'content_number_title' => $title             
            ));
    }
    
    public function deleteProduct($id){
        self::where('content_number_id', $id)->delete();
    }
    
    public function addProduct($id, $num, $title){
        self::create(array(
            'content_number_id' => $id,
            'content_number_num' => $num,
            'content_number_title' => $title
            //'content_description' => $des
        ));
        
    }
    
    public function searchProduct($key){
        $result = self::where('content_number_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}
