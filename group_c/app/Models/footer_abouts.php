<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer_abouts extends Model {

    protected $table = 'footer_abouts';
    protected $primaryKey = 'footer_about_id';
    public $timestamps = false;
    protected $fillable = [
        'footer_about_title',
        'footer_about_description',
    ];
    protected $guarded = ['footer_about_id'];

    public function getData() {
        return self::paginate(5);
    }

    public function getID($id){
        return self::where('footer_about_id', $id)->get();
    }
    
    public function exportFooter_abouts(){
        return footer_abouts::all();
    }
    
    
    public function editProduct($id, $title, $des){    
            self::where('footer_about_id', $id)->update(array(
                'footer_about_title' => $title,  
                'footer_about_description' => $des 
            ));
    }
    
    public function deleteProduct($id){
        self::where('footer_about_id', $id)->delete();
    }
    
    public function addProduct($id, $title, $des){
        self::create(array(
            'footer_about_id' => $id,
            'footer_about_title' => $title,
            'footer_about_description' => $des
        ));
        
    }
    
    public function searchProduct($key){
        $result = self::where('footer_about_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}
