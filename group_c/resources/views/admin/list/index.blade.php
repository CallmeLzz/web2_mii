@extends('admin.masterpage.masterpage')

@if (isset($contents))
    @section('title')
        List Content
    @stop
    @section('main_content')
       @include('admin.list.content')
    @stop
    @section('search_right')
        @include('admin.search.content.sidebar_right')
    @stop
    
@elseif (isset($contents_sml))
    @section('title')
        List Content Sml
    @stop
    @section('main_content')
       @include('admin.list.content_sml')
    @stop
    @section('search_right')
        @include('admin.search.content_sml.sidebar_right')
    @stop

@elseif (isset($contents_number))
    @section('title')
        List Content Number
    @stop
    @section('main_content')
       @include('admin.list.content_number')
    @stop
    @section('search_right')
        @include('admin.search.content_number.sidebar_right')
    @stop

@elseif (isset($contents_new))
    @section('title')
        List Content New
    @stop
    @section('main_content')
       @include('admin.list.content_news')
    @stop
    @section('search_right')
        @include('admin.search.content_news.sidebar_right')
    @stop
    
@elseif (isset($contents_sentences))
    @section('title')
        List Content Sentences
    @stop
    @section('main_content')
       @include('admin.list.content_sentences')
    @stop
    @section('search_right')
        @include('admin.search.content_sentences.sidebar_right')
    @stop
    
@elseif (isset($list_product))
    @section('title')
        List Top Product
    @stop
    @section('main_content')
       @include('admin.list.list_top')
    @stop
    @section('search_right')
        @include('admin.search.list_top.sidebar_right')
    @stop
  
@elseif (isset($list_product_main))
    @section('title')
        List Product
    @stop
    @section('main_content')
       @include('admin.list.list_products')
    @stop
    @section('search_right')
        @include('admin.search.list_product.sidebar_right')
    @stop
    
@elseif (isset($footer_contact))
    @section('title')
        Footer Contact
    @stop
    @section('main_content')
       @include('admin.list.footer_contacts')
    @stop
    @section('search_right')
    @include('admin.search.footer_contacts.sidebar_right')
    @stop  
    
@elseif (isset($footer_abouts))
    @section('title')
        Footer About
    @stop
    @section('main_content')
       @include('admin.list.footer_abouts')
    @stop
    @section('search_right')
    @include('admin.search.footer_abouts.sidebar_right')
    @stop 
    
    
@elseif (isset($footer_posts))
    @section('title')
        Footer Posts
    @stop
    @section('main_content')
       @include('admin.list.footer_posts')
    @stop
    @section('search_right')
    @include('admin.search.footer_posts.sidebar_right')
    @stop 
    
    
@endif


