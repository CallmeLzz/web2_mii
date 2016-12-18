<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\news;
use App\Models\contents;
use App\Models\contents_sml;
use App\Models\contents_project;
use App\Models\tabs_content;
use App\Models\tabs_content_right;
use App\Models\contents_number;
use App\Models\sentences;
use App\Models\logo_images;
use App\Models\footer_abouts;
use App\Models\footer_contacts;
use App\Models\footer_posts;

class HomeController extends Controller
{
    
    public function index() {
        $obj = new contents();
        $content = $obj->getData(1);    
        $contents_nd = $obj->getData(0);
        
        $obj2 = new contents_sml();
        $content_sml = $obj2->getData();
        
        $obj2 = new contents_project();
        $content_project = $obj2->getData();
        
        $obj = new tabs_content();
        $tab_content = $obj->getData();
        
        $obj = new tabs_content_right();
        $tab_content_right = $obj->getData();
        
        $obj2 = new contents_number();
        $content_number = $obj2->getData();
        
        $obj = new news();
        $news = $obj->getData();
        
        $obj = new sentences();
        $sentence = $obj->getData();
        
        $obj = new logo_images();
        $logo_image = $obj->getData();
        
        $obj = new footer_abouts();
        $footer_about = $obj->getData();
        
        $obj = new footer_contacts();
        $footer_contact = $obj->getData();
        
        $obj = new footer_posts();
        $footer_post = $obj->getData();
        
        return view('group_c.home.index', array('contents' => $content, 
                                                'contents_nd' => $contents_nd, 
                                                'contents_sml' => $content_sml,
                                                'contents_project' => $content_project,
                                                'tabs_content' => $tab_content,
                                                'tabs_content_right' => $tab_content_right,
                                                'contents_number' => $content_number,
                                                'news' => $news,
                                                'sentences' => $sentence,
                                                'logo_images' => $logo_image,
                                                'footer_abouts' => $footer_about,
                                                'footer_contacts' => $footer_contact,
                                                'footer_posts' => $footer_post));
        
    }
}

