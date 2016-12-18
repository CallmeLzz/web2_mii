@extends('admin.masterpage.masterpage')

@section('title')
    Search
@stop

@section('main_content')
   @include('admin.search.content_sml.search')
@stop
@section('search_right')
    @include('admin.search.content_sml.sidebar_right')
@stop



