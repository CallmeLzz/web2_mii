<?php

namespace App\Http\Controllers;
use App\Models\details;
use App\Models\footer_abouts;
use App\Models\footer_contacts;
use App\Models\footer_posts;

class DetailController extends Controller
{
    public function index() {
        $obj = new details();
        $detail = $obj->getData();
        
        $obj = new footer_abouts();
        $footer_about = $obj->getData();
        
        $obj = new footer_contacts();
        $footer_contact = $obj->getData();
        
        $obj = new footer_posts();
        $footer_post = $obj->getData();
        
        return view('group_c.detail.index', array('details' => $detail,
                                                'footer_abouts' => $footer_about,
                                                'footer_contacts' => $footer_contact,
                                                'footer_posts' => $footer_post));
    }
}
