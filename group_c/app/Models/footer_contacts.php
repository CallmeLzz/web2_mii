<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer_contacts extends Model {

    protected $table = 'footer_contacts';
    protected $primaryKey = 'footer_contact_id';
    public $timestamps = false;
    protected $fillable = [
        'footer_contact_icon',
        'footer_contact_content',
    ];
    protected $guarded = ['footer_contact_id'];

    public function getData() {
        return self::paginate(5);
    }

    public function getID($id){
        return self::where('footer_contact_id', $id)->get();
    }
    
    public function exportFooter_contacts(){
        return footer_contacts::all();
    }
    
    
    public function editProduct($id, $contact){    
            self::where('footer_contact_id', $id)->update(array(
                'footer_contact_content' => $contact,          
            ));
    }
    
    public function deleteProduct($id){
        self::where('footer_contact_id', $id)->delete();
    }
    
    public function addProduct($id, $icon, $contact){
        self::create(array(
            'footer_contact_id' => $id,
            'footer_contact_icon' => $icon,
            'footer_contact_content' => $contact
        ));
        
    }
    
    public function searchProduct($key){
        $result = self::where('footer_contact_content', 'like', '%'.$key.'%')->paginate(5);
        
        if (sizeof($result) == 0) return "Your product NOT exists";
        if ($key == '') return "Please enter a KEYWORD to search";
        else return $result;
    }
}
