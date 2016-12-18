@extends('admin.masterpage.masterpage')

@section('title')
    Search
@stop

@section('main_content')
   @include('admin.search.list_product.search')
@stop
@section('search_right')
    @include('admin.search.list_product.sidebar_right')
@stop



