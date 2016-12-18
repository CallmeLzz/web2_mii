@extends('admin.masterpage.masterpage')

@section('title')
    Search
@stop

@section('main_content')
   @include('admin.search.content.search')
@stop
@section('search_right')
    @include('admin.search.content.sidebar_right')
@stop



