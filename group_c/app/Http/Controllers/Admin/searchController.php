<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contents; 
use App\Models\contents_sml; 
use App\Models\contents_number; 
use App\Models\news; 
use App\Models\sentences;
use App\Models\top_products;
use App\Models\products;
use App\Models\images;
use App\Models\footer_contacts;
use App\Models\footer_abouts;
use App\Models\footer_posts;
use Session;
use Illuminate\Support\Facades\Input;

class searchController extends Controller
{
    /*Content*/
    public function searchData(Request $request){
        $key = $request->input('key');

        $obj = new contents();
        $content = $obj->searchProduct($key);

        return view('admin.search.content.index', 
                array('resultSearchs' => $content));
    }
    
    
    /*Content_sml*/
    public function searchData_content_sml(Request $request){
        $key = $request->input('key');

        $obj = new contents_sml();
        $content_sml = $obj->searchProduct($key);

        return view('admin.search.content_sml.index', 
                array('resultSearchs' => $content_sml));
    }
    
    /*Content_number*/
    public function searchData_content_number(Request $request){
        $key = $request->input('key');

        $obj = new contents_number();
        $content_number = $obj->searchProduct($key);

        return view('admin.search.content_number.index', 
                array('resultSearchs' => $content_number));
    }
    
    
    /*Content_news*/
    public function searchData_content_news(Request $request){
        $key = $request->input('key');

        $obj = new news();
        $content_news = $obj->searchProduct($key);

        return view('admin.search.content_news.index', 
                array('resultSearchs' => $content_news));
    }
    
    
    /*Content_sentences*/
    public function searchData_content_sentences(Request $request){
        $key = $request->input('key');

        $obj = new sentences();
        $content_sentences = $obj->searchProduct($key);

        return view('admin.search.content_sentences.index', 
                array('resultSearchs' => $content_sentences));
    }
    
    
    /*List Top product*/
    public function searchData_list_top(Request $request){
        $key = $request->input('key');

        $obj = new top_products();
        $content = $obj->searchProduct($key);

        return view('admin.search.list_top.index', 
                array('resultSearchs' => $content));
    }
    
    
    /*List product*/
    public function searchData_list_product(Request $request){
        $key = $request->input('key');

        $obj = new products();
        $content = $obj->searchProduct($key);

        return view('admin.search.list_product.index', 
                array('resultSearchs' => $content));
    }
    
    /*Footer Contacts*/
    public function searchData_footer_contacts(Request $request){
        $key = $request->input('key');

        $obj = new footer_contacts();
        $footer = $obj->searchProduct($key);

        return view('admin.search.footer_contacts.index', 
                array('resultSearchs' => $footer));
    }
    
    
    /*Footer Contacts*/
    public function searchData_footer_abouts(Request $request){
        $key = $request->input('key');

        $obj = new footer_abouts();
        $footer = $obj->searchProduct($key);

        return view('admin.search.footer_abouts.index', 
                array('resultSearchs' => $footer));
    }
    
    /*Footer Posts*/
    public function searchData_footer_posts(Request $request){
        $key = $request->input('key');

        $obj = new footer_posts();
        $footer = $obj->searchProduct($key);

        return view('admin.search.footer_posts.index', 
                array('resultSearchs' => $footer));
    }
}


