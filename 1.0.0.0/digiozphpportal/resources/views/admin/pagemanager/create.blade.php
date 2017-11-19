@extends('admin.app')

@section('title', 'Create Page')
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

    {!! Form::open(array('route' => 'pagemanager.store','method'=>'POST')) !!}
        {{ csrf_field() }}
        @include('admin.pagemanager.form')
    {!! Form::close() !!}

@endsection