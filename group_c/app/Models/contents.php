<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class contents extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'content_id';
    public $timestamps = false;
    protected $fillable = [
      'content_title',
      'content_img',
      'content_decription',
    ];
    protected $guarded = ['content_id'];
    
    public function getData($num){
        $type = 3;
        if ($num == 1){
            return self::paginate()->take($type);
        }
        else return self::where('content_id', '>', $type)->get();
    }
    
    public function getData2(){
        return self::paginate(3);
    }
    public function exportContent(){
        return contents::all();
    }
    
    public function getID($id){
        return self::where('content_id', $id)->get();
    }
    
    public function editProduct($id, $title, $img, $des){
        if ($img != null)
        {
            self::where('content_id', $id)->update(array(
                'content_title' => $title,
                'content_img' => 'images/'.$img,
                'content_description' => $des
            ));
        }
        else 
        {
            self::where('content_id', $id)->update(array(
                'content_title' => $title,
                'content_description' => $des
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('content_id', $id)->delete();
    }
    
    public function addProduct($id, $title, $img, $des){
        self::create(array(
            'content_id' => $id,
            'content_title' => $title,
            'content_img' => 'images/'.$img,
            //'content_description' => $des
        ));
        $get_id = self::select('content_id')->where('content_title', $title)->get();
        $id_temp;
        foreach($get_id as $value) $id_temp = $value->content_id;
        $this->editProduct($id_temp, $title, $img, $des);
    }
    
    public function searchProduct($key){
        $result = self::where('content_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}