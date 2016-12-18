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

class deleteController extends Controller
{
    /*Content*/
    public function deleteData(Request $request){
        $id = $request->input('content_id');
        
        $obj = new contents();
        $this->deletePicture($id, $obj, 'content_img');
        $content = $obj->deleteProduct($id);
        return redirect()->to('/list_content');
    }
    
    /*Content_sml*/
    public function deleteData_content_sml(Request $request){
        $id = $request->input('content_sml_id');
        
        $obj = new contents_sml();
        $this->deletePicture($id, $obj, 'content_sml_img');
        $content_sml = $obj->deleteProduct($id);
        return redirect()->to('/list_content_sml');
    }
    
    /*Content_number*/
    public function deleteData_content_number(Request $request){
        $id = $request->input('content_number_id');
        
        $obj = new contents_number();
        $content_number = $obj->deleteProduct($id);
        return redirect()->to('/list_content_number');
    }
    
    /*Content_news*/
    public function deleteData_content_news(Request $request){
        $id = $request->input('news_id');
        
        $obj = new news();
        $this->deletePicture($id, $obj, 'news_img');
        $content_news = $obj->deleteProduct($id);
        return redirect()->to('/list_content_news');
    }
    
    /*Content_sentences*/
    public function deleteData_content_sentences(Request $request){
        $id = $request->input('sentence_id');
        
        $obj = new sentences();
        $this->deletePicture($id, $obj, 'sentence_image');
        $content_sentences = $obj->deleteProduct($id);
        return redirect()->to('/list_content_sentences');
    }
    /*List Top Product*/
    public function delete_list_top(Request $request){
        $id = $request->input('top_product_id');
        
        $obj = new top_products();
        $list_top = $obj->deleteProduct($id);
        return redirect()->to('/list_top');
    }
    
    /*List Top Product*/
    public function delete_list_product(Request $request){
        $id = $request->input('product_id');
        
        $obj = new products();
        $list_product = $obj->deleteProduct($id);
        return redirect()->to('/list_product');
    }

    /*=============================== DELETE PICTURES ===============================*/
        public function deletePicture($id, $obj, $pic){
            $picName = null;
            $dataPic = $obj->getID($id);
            foreach ($dataPic as $value) {
                $picName = $value->$pic;
            }
            $checkFile = file_exists(public_path() . '/' . $picName);
            if ($checkFile){
                unlink(public_path() . '/' . $picName);
            }
        }
    
    /*Footer Contacts*/
    public function delete_footer_contacts(Request $request){
        $id = $request->input('footer_contact_id');
        
        $obj = new footer_contacts();
        $footer = $obj->deleteProduct($id);
        
        return redirect()->to('/footer_contacts');
    } 
    
    /*Footer About*/
    public function delete_footer_abouts(Request $request){
        $id = $request->input('footer_about_id');
        
        $obj = new footer_abouts();
        $footer = $obj->deleteProduct($id);
        
        return redirect()->to('/footer_abouts');
    } 
    
    
    /*Footer Post*/
    public function delete_footer_posts(Request $request){
        $id = $request->input('footer_post_id');
        
        $obj = new footer_posts();
        $footer = $obj->deleteProduct($id);
        
        return redirect()->to('/footer_posts');
    } 
}


