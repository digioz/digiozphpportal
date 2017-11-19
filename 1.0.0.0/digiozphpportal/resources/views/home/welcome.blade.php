@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="col-sm-12">
    @foreach ($announcements as $announcement)
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $announcement->name }}</h3>
        </div>
        <div class="panel-body">
            <p>{!!html_entity_decode($announcement->body)!!}</p>
        </div>
    </div>
    @endforeach

    <div class="text-center">
        <a class="btn btn-xs btn-primary" href="{{ route('announcements') }}">More Announcements</a></div>
    <br>
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
