@extends('admin.masterpage.masterpage')

@if (isset($contents))
    @section('title')
        Edit Content
    @stop
    @section('main_content')
       @include('admin.edit.content')
    @stop
    @section('search_right')
        @include('admin.search.content.sidebar_right')
    @stop
    
@elseif (isset($contents_sml))
    @section('title')
        Edit Content Sml
    @stop
    @section('main_content')
       @include('admin.edit.content_sml')
    @stop
    @section('search_right')
        @include('admin.search.content_sml.sidebar_right')
    @stop
    
@elseif (isset($contents_number))
    @section('title')
        Edit Content Number
    @stop
    @section('main_content')
       @include('admin.edit.content_number')
    @stop
    @section('search_right')
        @include('admin.search.content_number.sidebar_right')
    @stop
    
@elseif (isset($contents_new))
    @section('title')
        Edit Content News
    @stop
    @section('main_content')
       @include('admin.edit.content_news')
    @stop
    @section('search_right')
        @include('admin.search.content_news.sidebar_right')
    @stop
    
@elseif (isset($contents_sentences))
    @section('title')
        Edit Content Sentences
    @stop
    @section('main_content')
       @include('admin.edit.content_sentences')
    @stop
    @section('search_right')
        @include('admin.search.content_sentences.sidebar_right')
    @stop
    
    
 @elseif (isset($list_top))
    @section('title')
        Edit List Top Product
    @stop
    @section('main_content')
       @include('admin.edit.list_top')
    @stop
    @section('search_right')
        @include('admin.search.list_top.sidebar_right')
    @stop
    
 @elseif (isset($list_product))
    @section('title')
        Edit List Product
    @stop
    @section('main_content')
       @include('admin.edit.list_products')
    @stop
    @section('search_right')
        @include('admin.search.list_product.sidebar_right')
    @stop
    
    
 @elseif (isset($footer_contact))
    @section('title')
        Edit Footer Contacts
    @stop
    @section('main_content')
       @include('admin.edit.footer_contacts')
    @stop
    @section('search_right')
        @include('admin.search.footer_contacts.sidebar_right')
    @stop
    
    
  @elseif (isset($footer_abouts))
    @section('title')
        Edit Footer Contacts
    @stop
    @section('main_content')
       @include('admin.edit.footer_abouts')
    @stop
    @section('search_right')
        @include('admin.search.footer_abouts.sidebar_right')
    @stop
    
@elseif (isset($footer_posts))
    @section('title')
        Edit Footer Posts
    @stop
    @section('main_content')
       @include('admin.edit.footer_posts')
    @stop
    @section('search_right')
        @include('admin.search.footer_posts.sidebar_right')
    @stop
@endif


