<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected  $table = 'news';
    protected  $primaryKey = 'news_id';
    public $timestamps = false;
    protected $filltable = [
        'news_img',
        'news_title',
        'news_decription',
    ];
    //protected $quarded = ['news_id'];
    protected $guarded = array();
    
    public function getData(){
        return self::paginate(3);
    }
    
    public function exportContent_news(){
        return news::all();
    }
    
    public function getID($id){
        return self::where('news_id', $id)->get();
    }
    
    public function editProduct($id, $title, $img, $des){
        if ($img != null)
        {
            self::where('news_id', $id)->update(array(
                'news_title' => $title,
                'news_img' => 'images/'.$img,
                'news_decription' => $des
            ));
        }
        else 
        {
            self::where('news_id', $id)->update(array(
                'news_title' => $title,
                'news_decription' => $des
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('news_id', $id)->delete();
    }
    
    public function addProduct($title, $img, $des){
        //var_dump($id, $title, $img, $des) or die();
        self::create(array(
            'news_title' => $title,
            'news_img' => 'images/'.$img,
            'news_decription' => $des
        ));
        
    }
    
    public function searchProduct($key){
        $result = self::where('news_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}

