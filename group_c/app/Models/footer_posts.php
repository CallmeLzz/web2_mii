<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer_posts extends Model {

    protected $table = 'footer_posts';
    protected $primaryKey = 'footer_post_id';
    public $timestamps = false;
    protected $fillable = [
        'footer_post_img',
        'footer_post_title',
        'footer_post_date',
    ];
    protected $guarded = ['footer_post_id'];

    public function getData() {
        return self::paginate(5);
    }
    
     public function exportFooter_posts(){
        return footer_posts::all();
    }
    
    public function getID($id){
        return self::where('footer_post_id', $id)->get();
    }
    
    public function editProduct($id, $img, $title, $date){
        if ($img != null)
        {
            self::where('footer_post_id', $id)->update(array(
                'footer_post_img' => 'images/'.$img,
                'footer_post_title' => $title,
                'footer_post_date' => $date
            ));
        }
        else 
        {
            self::where('footer_post_id', $id)->update(array(
                'footer_post_title' => $title,
                'footer_post_date' => $date
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('footer_post_id', $id)->delete();
    }
    
    public function addProduct($id, $img, $title, $date){
        self::create(array(
            'footer_post_id' => $id,
            'footer_post_title' => $title,
            'footer_post_img' => 'images/'.$img,
            'footer_post_date' => $date
        ));
    }
    
    public function searchProduct($key){
        $result = self::where('footer_post_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}
