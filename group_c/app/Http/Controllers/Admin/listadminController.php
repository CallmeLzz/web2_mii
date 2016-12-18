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
use Excel;

class listadminController extends Controller
{
    /*Load admin*/
    public function welcome(){
        return view('admin.index');
    }
    
    /*Content */
    public function list_content() {
        $obj = new contents();
        $content = $obj->getData2();
        return view('admin.list.index', array('contents' => $content));
    }

    /* Export Content */
    public function exportContent() {
        $obj = new contents();
        $content = $obj->exportContent();
        Excel::create('content', function($excel) use($content) {
            $excel->sheet('Sheet 1', function($sheet) use($content) {
                $sheet->fromArray($content);
            });
        })->export('xls');
    }
    
    /*Content sml*/
    public function list_content_sml() {
        $obj = new contents_sml();
        $content_sml = $obj->getData();
        return view('admin.list.index', array('contents_sml' => $content_sml));
    }
    
    /* Export Content_sml */
    public function exportContent_sml() {
        $obj = new contents_sml();
        $content_sml = $obj->exportContent_sml();
        Excel::create('content_sml', function($excel) use($content_sml) {
            $excel->sheet('Sheet 1', function($sheet) use($content_sml) {
                $sheet->fromArray($content_sml);
            });
        })->export('xls');
    }
    
    /*Content number*/
    public function list_content_number() {
        $obj = new contents_number();
        $content_number = $obj->getData();
        return view('admin.list.index', array('contents_number' => $content_number));
    }
    /* Export Content_number */
    public function exportContent_number() {
        $obj = new contents_number();
        $content = $obj->exportContent_number();
        Excel::create('content_number', function($excel) use($content) {
            $excel->sheet('Sheet 1', function($sheet) use($content) {
                $sheet->fromArray($content);
            });
        })->export('xls');
    }
    
    /*Content new*/
    public function list_content_news() {
        $obj = new news();
        $content_new = $obj->getData();
        return view('admin.list.index', array('contents_new' => $content_new));
    }
    
     /* Export Content_news */
    public function exportContent_news() {
        $obj = new news();
        $content = $obj->exportContent_news();
        Excel::create('content_news', function($excel) use($content) {
            $excel->sheet('Sheet 1', function($sheet) use($content) {
                $sheet->fromArray($content);
            });
        })->export('xls');
    }
    
    /*Content sentences*/
    public function list_content_sentences() {
        $obj = new sentences();
        $content_sentences = $obj->getData();
        return view('admin.list.index', array('contents_sentences' => $content_sentences));
    }
    
    /* Export Sentences */
    public function exportContent_sentences() {
        $obj = new sentences();
        $content = $obj->exportContent_sentences();
        Excel::create('content_sentences', function($excel) use($content) {
            $excel->sheet('Sheet 1', function($sheet) use($content) {
                $sheet->fromArray($content);
            });
        })->export('xls');
    }
    
    /*List Top_product*/
    public function list_top() {
        $obj = new top_products();
        $list_product = $obj->getData();
        return view('admin.list.index', array('list_product' => $list_product));
    }
    
    /* Export Top Product */
    public function exportList_top() {
        $obj = new top_products();
        $content = $obj->exportList_top();
        Excel::create('list_top_product', function($excel) use($content) {
            $excel->sheet('Sheet 1', function($sheet) use($content) {
                $sheet->fromArray($content);
            });
        })->export('xls');
    }
    
    /*List Product*/
    public function list_product() {
        $obj = new products();
        $list_product = $obj->getData();
        return view('admin.list.index', array('list_product_main' => $list_product));
    }
    
    /* Export Product */
    public function exportList_product() {
        $obj = new products();
        $content = $obj->exportList_product();
        Excel::create('list_product', function($excel) use($content) {
            $excel->sheet('Sheet 1', function($sheet) use($content) {
                $sheet->fromArray($content);
            });
        })->export('xls');
    }
    
    
    /*Footer Contacts*/
    public function footer_contacts() {
        $obj = new footer_contacts();
        $footer = $obj->getData();
        return view('admin.list.index', array('footer_contact' => $footer));
    }
    /* Export footer contacts */
    public function exportFooter_contacts() {
        $obj = new footer_contacts();
        $footer = $obj->exportFooter_contacts();
        Excel::create('footer_contacts', function($excel) use($footer) {
            $excel->sheet('Sheet 1', function($sheet) use($footer) {
                $sheet->fromArray($footer);
            });
        })->export('xls');
    }
    
    /*Footer Contacts*/
    public function footer_abouts() {
        $obj = new footer_abouts();
        $footer = $obj->getData();
        return view('admin.list.index', array('footer_abouts' => $footer));
    }
    
    /* Export footer about */
    public function exportFooter_abouts() {
        $obj = new footer_abouts();
        $footer = $obj->exportFooter_abouts();
        Excel::create('footer_about', function($excel) use($footer) {
            $excel->sheet('Sheet 1', function($sheet) use($footer) {
                $sheet->fromArray($footer);
            });
        })->export('xls');
    }
    
    
    
    /*Footer Posst*/
    public function footer_posts() {
        $obj = new footer_posts();
        $footer = $obj->getData();
        return view('admin.list.index', array('footer_posts' => $footer));
    }
    
    /* Export footer Posts */
    public function exportFooter_posts() {
        $obj = new footer_posts();
        $footer = $obj->exportFooter_posts();
        Excel::create('footer_posts', function($excel) use($footer) {
            $excel->sheet('Sheet 1', function($sheet) use($footer) {
                $sheet->fromArray($footer);
            });
        })->export('xls');
    }
}


