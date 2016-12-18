<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    protected  $table = 'products';
    protected  $primaryKey = 'product_id';
    public $timestamps = false;
    protected $filltable = [
        'product_img',
        'product_title',
        'product_amount',
        'product_amount_del',
    ];
    //protected $quarded = ['product_id'];
    protected $guarded = array();
    
    public function getData() {
        return self::paginate(9);
    }
    
    public function exportList_product(){
        return products::all();
    }
   
    public function getID($id){
        return self::where('product_id', $id)->get();
    }
    
    public function editProduct($id, $img, $title, $new, $old){
        if ($img != null)
        {
            self::where('product_id', $id)->update(array(
                'product_img' => 'images/'.$img,
                'product_title' => $title,
                'product_amount' => $new,
                'product_amount_del' => $old
            ));
        }
        else 
        {
            self::where('product_id', $id)->update(array(
                'product_title' => $title,
                'product_amount' => $new,
                'product_amount_del' => $old
            ));
        }
    }
    
    public function deleteProduct($id){
        self::where('product_id', $id)->delete();
    }
    
    public function addProduct($id, $img, $title, $old, $new){
        self::create(array(
            'product_id' => $id,
            'product_img' => 'images/'.$img,
            'product_title' => $title,
            'product_amount_del' => '£'.$old.'.00',
            'product_amount' => '£'.$new.'.00'
        ));
    }
    
    public function searchProduct($key){
        $result = self::where('product_title', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}