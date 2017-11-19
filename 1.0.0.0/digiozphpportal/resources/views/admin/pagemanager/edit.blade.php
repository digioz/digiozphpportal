@extends('admin.app')

@section('title', 'Edit Page')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error: </strong> There were some problems with your input.<br /><br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($page, ['method' => 'PATCH','route' => ['pagemanager.update', $page->id]]) !!}
        {{ csrf_field() }}
        @include('admin.pagemanager.form')
    {!! Form::close() !!}

@endsection