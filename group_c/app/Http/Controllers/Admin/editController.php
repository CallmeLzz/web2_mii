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

class editController extends Controller
{
    /*Content*/
    public function editView(Request $request){
        $id = $request->input('content_id');       
        $obj = new contents();
        $content = $obj->getID($id);
        return view('admin.edit.index', array('contents' => $content));
    }
    public function editData(Request $request){
        $obj = new contents();

        $id = $request->input('content_id');
        $title = $request->input('content_title');
        $img = $request->input('content_img');
        $des = $request->input('content_description');
        
        $check_img = Input::file('content_img');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('content_img')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('content_img')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('content_img')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $title, $img_name, $des);
        }
        else
        {
            $content = $obj->editProduct($id, $title, $img_name, $des);
        }
      
        
        return redirect()->to('/list_content');
    }
    
   /*Content_sml*/
    public function edit_content_sml(Request $request){
        $id = $request->input('content_sml_id');
        $obj = new contents_sml();
        $content_sml = $obj->getID($id);
        return view('admin.edit.index', array('contents_sml' => $content_sml));
    }
    public function editData_content_sml(Request $request){
        $obj = new contents_sml();

        $id = $request->input('content_sml_id');
        $title = $request->input('content_sml_title');
        $img = $request->input('content_sml_img');
        $des = $request->input('content_sml_description');
        
        $check_img = Input::file('content_sml_img');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('content_sml_img')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('content_sml_img')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('content_sml_img')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $title, $img_name, $des);
        }
        else
        {
            $content = $obj->editProduct($id, $title, $img_name, $des);
        }
      
        
        return redirect()->to('/list_content_sml');
    }
    
    
    /*Content_number*/
    public function edit_content_number(Request $request){
        $id = $request->input('content_number_id');
        $obj = new contents_number();
        $content_number = $obj->getID($id);
        return view('admin.edit.index', array('contents_number' => $content_number));
    }
    public function editData_content_number(Request $request){
        $obj = new contents_number();

        $id = $request->input('content_number_id');
        $num = $request->input('content_number_num');
        $title = $request->input('content_number_title');
        
       
        $content_number = $obj->editProduct($id, $num, $title);
             
        return redirect()->to('/list_content_number');
    }
    
    /*Content_news*/
    public function edit_content_news(Request $request){
        $id = $request->input('news_id');
        $obj = new news();
        $content_new = $obj->getID($id);
        return view('admin.edit.index', array('contents_new' => $content_new));
    }
    public function editData_content_news(Request $request){
        $obj = new news();

        $id = $request->input('news_id');
        $title = $request->input('news_title');
        $img = $request->input('news_img');
        $des = $request->input('news_decription');
        
        $check_img = Input::file('news_img');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('news_img')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('news_img')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('news_img')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $title, $img_name, $des);
        }
        else
        {
            $content = $obj->editProduct($id, $title, $img_name, $des);
        }
      
        
        return redirect()->to('/list_content_news');
    }
    
    /*Content_sentences*/
    public function edit_content_sentences(Request $request){
        $id = $request->input('sentence_id');
        $obj = new sentences();
        $content_sentences = $obj->getID($id);
        return view('admin.edit.index', array('contents_sentences' => $content_sentences));
    }
    public function editData_content_sentences(Request $request){
        $obj = new sentences();

        $id = $request->input('sentence_id');
        $des = $request->input('sentence_description');
        $aut = $request->input('sentence_author');
        $img = $request->input('sentence_image');
        
        
        $check_img = Input::file('sentence_image');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('sentence_image')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('sentence_image')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('sentence_image')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $des, $aut, $img_name);
        }
        else
        {
            $content = $obj->editProduct($id, $des, $aut, $img_name);
        }
        
        return redirect()->to('/list_content_sentences');
    }

    /*List Top product*/
    public function edit_list_top(Request $request){
        $id = $request->input('top_product_id');
        $obj = new top_products();
        $list_top = $obj->getID($id);
        return view('admin.edit.index', array('list_top' => $list_top));
    }
    public function editData_list_top(Request $request){
        $obj = new top_products();

        $id = $request->input('top_product_id');
        $title = $request->input('top_product_title');
        $new = $request->input('top_product_amount');
        $old = $request->input('top_product_amount_del');
        $img = $request->input('top_product_img');
        
        
        $check_img = Input::file('top_product_img');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('top_product_img')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('top_product_img')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('top_product_img')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $img_name, $title, $new, $old);
        }
        else
        {
            $content = $obj->editProduct($id, $img_name, $title, $new, $old);
        }
        
        return redirect()->to('/list_top');
    }
    
    
     /*List Product*/
    public function edit_list_product(Request $request){
        $id = $request->input('product_id');
        $obj = new products();
        $list_product = $obj->getID($id);
        return view('admin.edit.index', array('list_product' => $list_product));
    }
    public function editData_list_product(Request $request){
        $obj = new products();

        $id = $request->input('product_id');
        $title = $request->input('product_title');
        $new = $request->input('product_amount');
        $old = $request->input('product_amount_del');
        $img = $request->input('product_img');
        
        
        $check_img = Input::file('product_img');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('product_img')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('product_img')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('product_img')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $img_name, $title, $new, $old);
        }
        else
        {
            $content = $obj->editProduct($id, $img_name, $title, $new, $old);
        }
        
        return redirect()->to('/list_product');
    }
    
     /*Footer contacts*/
    public function edit_footer_contacts(Request $request){
        $id = $request->input('footer_contact_id');
        $obj = new footer_contacts();
        $footer = $obj->getID($id);
        return view('admin.edit.index', array('footer_contact' => $footer));
    }
    public function editData_footer_contacts(Request $request){
        $obj = new footer_contacts();

        $id = $request->input('footer_contact_id');
        $contact = $request->input('footer_contact_content');

        $footer = $obj->editProduct($id, $contact);
            
        return redirect()->to('/footer_contacts');
    }
    
    
     /*Footer abouts*/
    public function edit_footer_abouts(Request $request){
        $id = $request->input('footer_about_id');
        $obj = new footer_abouts();
        $footer = $obj->getID($id);
        return view('admin.edit.index', array('footer_abouts' => $footer));
    }
    public function editData_footer_abouts(Request $request){
        $obj = new footer_abouts();

        $id = $request->input('footer_about_id');
        $title = $request->input('footer_about_title');
        $des = $request->input('footer_about_description');

        $footer = $obj->editProduct($id, $title, $des);
            
        return redirect()->to('/footer_abouts');
    }
    
    
    /*Footer Posts*/
    public function edit_footer_posts(Request $request){
        $id = $request->input('footer_post_id');
        $obj = new footer_posts();
        $footer = $obj->getID($id);
        return view('admin.edit.index', array('footer_posts' => $footer));
    }
    public function editData_footer_posts(Request $request){
        $obj = new footer_posts();

        $id = $request->input('footer_post_id');
        $title = $request->input('footer_post_title');
        $date = $request->input('footer_post_date');
        $img = $request->input('footer_post_img');
        
        
        $check_img = Input::file('footer_post_img');
        
        $img_name = null;
        
        if ($check_img != null)
        {
            if (Input::file('footer_post_img')->isValid()) {
                $destinationPath = 'images';
                $extension = Input::file('footer_post_img')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $img_name = $fileName;
                Input::file('footer_post_img')->move($destinationPath, $img_name);          
            }
            $content = $obj->editProduct($id, $img_name, $title, $date);
        }
        else
        {
            $content = $obj->editProduct($id, $img_name, $title, $date);
        }
        
        return redirect()->to('/footer_posts');
    }
}


