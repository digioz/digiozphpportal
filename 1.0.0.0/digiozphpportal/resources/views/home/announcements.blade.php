@extends('layouts.app')
@section('title', 'Announcements')
@section('content')
<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Announcements</h3>
        </div>
        <div class="panel-body">

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

        </div>
    </div>
</div>
@endsection