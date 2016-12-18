<?php

namespace App\Http\Controllers;

use App\Models\top_products;
use App\Models\products;
use App\Models\categories;
use App\Models\footer_abouts;
use App\Models\footer_contacts;
use App\Models\footer_posts;

class ListController extends Controller
{
    public function index() {
        $obj = new top_products();
        $top_product = $obj->getData();
        
        $obj2 = new products();
        $product = $obj2->getData();
        
        $obj3 = new categories();
        $categorie = $obj3->getData();
        
        $obj = new footer_abouts();
        $footer_about = $obj->getData();
        
        $obj = new footer_contacts();
        $footer_contact = $obj->getData();
        
        $obj = new footer_posts();
        $footer_post = $obj->getData();
        
        return view('group_c.list.index', array('top_products' => $top_product,
                                                'products' => $product, 
                                                'categories' => $categorie,
                                                'footer_abouts' => $footer_about,
                                                'footer_contacts' => $footer_contact,
                                                'footer_posts' => $footer_post));
    }
    
    
}
