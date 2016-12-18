@extends('admin.masterpage.masterpage')
<!------------------------------------>
@if (isset($content))
    @section('title')
        Add Content
    @stop
    @section('main_content')
       @include('admin.add.content')
    @stop

@elseif (isset($content_sml))
    @section('title')
        Add Content_sml
    @stop
    @section('main_content')
       @include('admin.add.content_sml')
    @stop
    
@elseif (isset($content_number))
    @section('title')
        Add Content_number
    @stop
    @section('main_content')
       @include('admin.add.content_number')
    @stop
    
@elseif (isset($content_news))
    @section('title')
        Add Content_news
    @stop
    @section('main_content')
       @include('admin.add.content_news')
    @stop
    
@elseif (isset($content_sentences))
    @section('title')
        Add Content_Sentences
    @stop
    @section('main_content')
       @include('admin.add.content_sentences')
    @stop
  
@elseif (isset($list_top))
    @section('title')
        Add Content_Sentences
    @stop
    @section('main_content')
       @include('admin.add.list_top')
    @stop
    
 @elseif (isset($list_product))
    @section('title')
        Add Content Sentences
    @stop
    @section('main_content')
       @include('admin.add.list_product')
    @stop   
    
@elseif (isset($footer_contacts))
    @section('title')
        Add Footer Contacts
    @stop
    @section('main_content')
       @include('admin.add.footer_contacts')
    @stop   


@elseif (isset($footer_abouts))
    @section('title')
        Add Footer Abouts
    @stop
    @section('main_content')
       @include('admin.add.footer_abouts')
    @stop   
  

@elseif (isset($footer_posts))
    @section('title')
        Add Footer Posts
    @stop
    @section('main_content')
       @include('admin.add.footer_posts')
    @stop   
    
@endif

<!-------------------------------------->
