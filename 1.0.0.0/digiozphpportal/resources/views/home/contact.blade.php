@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $page->title }}</h3>
        </div>
        <div class="panel-body">
            {!!html_entity_decode($page->body)!!}
        </div>
    </div>
</div>



@endsection