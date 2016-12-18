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
use App\Models\footer_contacts;
use App\Models\footer_abouts;
use App\Models\footer_posts;
use App\Models\images;
use Session;
use Illuminate\Support\Facades\Input;

class addController extends Controller
{
    /*Content_1*/
    public function add(){
        $content = 0;
        return view('admin.add.index')->with('content', $content);
    }
    public function addData(Request $request){
        $id = $request->input('content_id');
        $title = $request->input('content_title');
        $img = $request->input('content_img');
        $des = $request->input('content_description');
        
        $img_name = null;
        
        if (Input::file('content_img')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('content_img')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('content_img')->move($destinationPath, $img_name);          
        }
        
        $obj = new contents();       
        $content = $obj->addProduct($id, $title, $img_name, $des);
              
        return redirect()->to('/list_content');
    }
    
    
    /*Content_sml*/
    public function add_content_sml(){
        $content = 0;
        return view('admin.add.index')->with('content_sml', $content);
    }
    public function addData_content_sml(Request $request){
        $id = $request->input('content_sml_id');
        $title = $request->input('content_sml_title');
        $img = $request->input('content_sml_img');
        $des = $request->input('content_sml_description');
        
        $img_name = null;
        
        if (Input::file('content_sml_img')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('content_sml_img')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('content_sml_img')->move($destinationPath, $img_name);          
        }
        
        $obj = new contents_sml();       
        $content_sml = $obj->addProduct($id, $title, $img_name, $des);
              
        return redirect()->to('/list_content_sml');
    }
    
    /*Content_number*/
    public function add_content_number(){
        $content = 0;
        return view('admin.add.index')->with('content_number', $content);
    }
    public function addData_content_number(Request $request){
        $id = $request->input('content_number_id');
        $num = $request->input('content_number_num');
        $title = $request->input('content_number_title');
               
        $obj = new contents_number();       
        $content_number = $obj->addProduct($id, $num, $title);
              
        return redirect()->to('/list_content_number');
    }
    
    /*Content_news*/
    public function add_content_news(){
        $content = 0;
        return view('admin.add.index')->with('content_news', $content);
    }
    public function addData_content_news(Request $request){
   
        $img = $request->input('news_img');
        $title = $request->input('news_title');
        $des = $request->input('news_decription');
        
        $img_name = null;
        
        if (Input::file('news_img')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('news_img')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('news_img')->move($destinationPath, $img_name);          
        }
        
        
        $obj = new news();       
        $content = $obj->addProduct($title, $img_name, $des);
              
        return redirect()->to('/list_content_news');
    }
    
    /*Content_sentences*/
    public function add_content_sentences(){
        $content = 0;
        return view('admin.add.index')->with('content_sentences', $content);
    }
    public function addData_content_sentences(Request $request){
        $id = $request->input('sentence_id');
        $des = $request->input('sentence_description');
        $aut = $request->input('sentence_author');
        $img = $request->input('sentence_image');
        
        
        $img_name = null;
        
        if (Input::file('sentence_image')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('sentence_image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('sentence_image')->move($destinationPath, $img_name);          
        }
        
        $obj = new sentences();       
        $content_sentences = $obj->addProduct($id, $des, $aut, $img_name);
              
        return redirect()->to('/list_content_sentences');
    }
    
    
    /*List Top_product*/
    public function add_list_top(){
        $content = 0;
        return view('admin.add.index')->with('list_top', $content);
    }
    public function addData_list_top(Request $request){   
        $obj = new top_products();

        $id = $request->input('top_product_id');
        $title = $request->input('top_product_title');
        $new = $request->input('top_product_amount');
        $old = $request->input('top_product_amount_del');
        $img = $request->input('top_product_img');
        
        
        $img_name = null;
        
        if (Input::file('top_product_img')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('top_product_img')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('top_product_img')->move($destinationPath, $img_name);          
        }
        $content = $obj->addProduct($id, $img_name, $title, $old, $new);
        return redirect()->to('/list_top');
    }
    
    /*List Product*/
    public function add_list_product(){
        $content = 0;
        return view('admin.add.index')->with('list_product', $content);
    }
    public function addData_list_product(Request $request){   
        $obj = new products();

        $id = $request->input('product_id');
        $title = $request->input('product_title');
        $new = $request->input('product_amount');
        $old = $request->input('product_amount_del');
        $img = $request->input('product_img');
               
        $img_name = null;
        
        if (Input::file('product_img')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('product_img')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('product_img')->move($destinationPath, $img_name);          
        }
        
        $content = $obj->addProduct($id, $img_name, $title, $old, $new);
        
        return redirect()->to('/list_product');
    }
    
    /*Footer Contacts*/
    public function add_footer_contacts(){
        $footer = 0;
        return view('admin.add.index')->with('footer_contacts', $footer);
    }
    public function addData_footer_contacts(Request $request){   
        $obj = new footer_contacts();

        $id = $request->input('footer_contact_id');
        $icon = $request->input('footer_contact_icon');
        $contact = $request->input('footer_contact_content');
        
        $content = $obj->addProduct($id, $icon, $contact);
        
        return redirect()->to('/footer_contacts');
    }
    
    
    /*Footer Contacts*/
    public function add_footer_abouts(){
        $footer = 0;
        return view('admin.add.index')->with('footer_abouts', $footer);
    }
    public function addData_footer_abouts(Request $request){   
        $obj = new footer_abouts();

        $id = $request->input('footer_about_id');
        $title = $request->input('footer_about_title');
        $des = $request->input('footer_about_description');
        
        $content = $obj->addProduct($id, $title, $des);
        
        return redirect()->to('/footer_abouts');
    }
    
    
     /*Footer Posts*/
    public function add_footer_posts(){
        $footer = 0;
        return view('admin.add.index')->with('footer_posts', $footer);
    }
    public function addData_footer_posts(Request $request){   
        $obj = new footer_posts();


        $id = $request->input('footer_post_id');
        $title = $request->input('footer_post_title');
        $date = $request->input('footer_post_date');
        $img = $request->input('footer_post_img');
               
        $img_name = null;
        
        if (Input::file('footer_post_img')->isValid()) {
            $destinationPath = 'images';
            $extension = Input::file('footer_post_img')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file('footer_post_img')->move($destinationPath, $img_name);          
        }
                      
        $content = $obj->addProduct($id, $img_name, $title, $date);
        
        return redirect()->to('/footer_posts');
    }
}


