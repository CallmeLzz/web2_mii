@extends('admin.masterpage.masterpage')

@section('title')
    Search
@stop

@section('main_content')
   @include('admin.search.content_number.search')
@stop
@section('search_right')
    @include('admin.search.content_number.sidebar_right')
@stop



