<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class contents_sml extends Model
{
    protected $table = 'contents_sml';
    protected $primaryKey = 'content_sml_id';
    public $timestamps = false;
    protected $fillable = [
      'content_sml_title',
      'content_sml_img',
      'content_sml_description',
    ];
    protected $guarded = ['content_sml_id'];
    
    public function getData(){
        return self::paginate(3);
    }
    
    public function exportContent_sml(){
        return contents_sml::all();
    }
    
    public function getID($id){
        return self::where('content_sml_id', $id)->get();
    }
    
    public function editProduct($id, $title, $img, $des){
        if ($img != null)
        {
            self::where('content_sml_id', $id)->update(array(
                'content_sml_title' => $title,
                'content_sml_img' => 'images/'.$img,
                'content_sml_description' => $des
            ));
        }
        else 
        {
            self::where('content_sml_id', $id)->update(array(
                'content_sml_title' => $title,
                'content_sml_description' => $des
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('content_sml_id', $id)->delete();
    }
    
    public function addProduct($id, $title, $img, $des){
        self::create(array(
            'content_sml_id' => $id,
            'content_sml_title' => $title,
            'content_sml_img' => 'images/'.$img,
            //'content_description' => $des
        ));
        $get_id = self::select('content_sml_id')->where('content_sml_title', $title)->get();
        $id_temp;
        foreach($get_id as $value) $id_temp = $value->content_sml_id;
        $this->editProduct($id_temp, $title, $img, $des);
    }
    
    public function searchProduct($key){
        $result = self::where('content_sml_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}
