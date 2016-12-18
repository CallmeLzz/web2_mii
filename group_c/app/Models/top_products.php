<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class top_products extends Model
{
    protected  $table = 'top_products';
    protected  $primaryKey = 'top_product_id';
    public $timestamps = false;
    protected $filltable = [
        'top_product_img',
        'top_product_title',
        'top_product_amount',
        'top_product_amount_del',
    ];
    //protected $quarded = ['top_products_id'];
    protected $guarded = array();
    
    public function getData() {
        return self::paginate(3);
    }
    
    public function exportList_top(){
        return top_products::all();
    }
   
    public function getID($id){
        return self::where('top_product_id', $id)->get();
    }
    
    public function editProduct($id, $img, $title, $new, $old){
        if ($img != null)
        {
            self::where('top_product_id', $id)->update(array(
                'top_product_img' => 'images/'.$img,
                'top_product_title' => $title,
                'top_product_amount' => $new,
                'top_product_amount_del' => $old
            ));
        }
        else 
        {
            self::where('top_product_id', $id)->update(array(
                'top_product_title' => $title,
                'top_product_amount' => $new,
                'top_product_amount_del' => $old
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('top_product_id', $id)->delete();
    }
    
    public function addProduct($id, $img, $title, $old, $new){
        self::create(array(
            'top_product_id' => $id,
            'top_product_img' => 'images/'.$img,
            'top_product_title' => $title,
            'top_product_amount_del' => '£'.$old.'.00',
            'top_product_amount' => '£'.$new.'.00'
        ));
    }
    
    public function searchProduct($key){
        $result = self::where('top_product_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}

