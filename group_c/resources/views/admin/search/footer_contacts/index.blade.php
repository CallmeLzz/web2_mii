@extends('admin.masterpage.masterpage')

@section('title')
    Search
@stop

@section('main_content')
   @include('admin.search.footer_contacts.search')
@stop
@section('search_right')
    @include('admin.search.footer_contacts.sidebar_right')
@stop



