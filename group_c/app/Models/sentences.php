<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sentences extends Model {

    protected $table = 'sentences';
    protected $primaryKey = 'sentence_id';
    public $timestamps = false;
    protected $fillable = [
        'sentence_description',
        'sentence_author',
        'sentence_image',
    ];
    protected $guarded = ['sentence_id'];

    public function getData(){
        return self::paginate(3);
    }
    public function exportContent_sentences(){
        return sentences::all();
    }
    public function getID($id){
        return self::where('sentence_id', $id)->get();
    }
    
    public function editProduct($id, $des, $aut, $img){
        if ($img != null)
        {
            self::where('sentence_id', $id)->update(array(
                'sentence_description' => $des,
                'sentence_author' => $aut,
                'sentence_image' => 'images/'.$img               
            ));
        }
        else 
        {
            self::where('sentence_id', $id)->update(array(
                'sentence_description' => $des,
                'sentence_author' => $aut
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('sentence_id', $id)->delete();
    }
    
    public function addProduct($id, $des, $aut, $img){
        self::create(array(
            'sentence_id' => $id,
            'sentence_description' => $des,
            'sentence_author' => $aut,
            'sentence_image' => 'images/'.$img
            
        ));
    }
    
    public function searchProduct($key){
        $result = self::where('sentence_description', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}
