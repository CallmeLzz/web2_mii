@extends('admin.masterpage.masterpage')

@section('title')
    Search
@stop

@section('main_content')
   @include('admin.search.list_top.search')
@stop
@section('search_right')
    @include('admin.search.list_top.sidebar_right')
@stop



