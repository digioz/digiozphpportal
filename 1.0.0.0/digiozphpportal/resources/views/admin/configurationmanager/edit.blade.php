@extends('admin.app')

@section('title', 'Edit Configuration Entry')
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

    {!! Form::model($config, ['method' => 'PATCH','route' => ['configurationmanager.update', $config->id]]) !!}
        {{ csrf_field() }}
        @include('admin.configurationmanager.form')
    {!! Form::close() !!}

@endsection