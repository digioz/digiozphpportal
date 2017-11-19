@extends('admin.app')

@section('title', 'Create Config Entry')
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

    {!! Form::open(array('route' => 'configurationmanager.store','method'=>'POST')) !!}
        {{ csrf_field() }}
        @include('admin.configurationmanager.form')
    {!! Form::close() !!}

@endsection