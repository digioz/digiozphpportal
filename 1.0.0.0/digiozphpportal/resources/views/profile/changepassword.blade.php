@extends('layouts.app')
@section('title', 'Change Password')
@section('content')
<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Change Password</h3>
        </div>
        <div class="panel-body">
            <h2>Change Password</h2>

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

            <p>&nbsp;</p>
            <div class="form-horizontal">
                {!! Form::open(array('route' => 'changepasswordprocess','method'=>'POST')) !!}
                    {{ csrf_field() }}
                
                    <div class="form-group">
                        {!! Form::label('oldpassword', 'Old Password', ['class' => 'control-label col-md-3']) !!}
                        <div class="col-md-10" style="max-width:280px;">
                            {!! Form::password('oldpassword', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('newpassword', 'New Password', ['class' => 'control-label col-md-3']) !!}
                        <div class="col-md-10" style="max-width:280px;">
                            {!! Form::password('newpassword', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('newpasswordconfirm', 'New Password Confirm', ['class' => 'control-label col-md-3']) !!}
                        <div class="col-md-10" style="max-width:280px;">
                            {!! Form::password('newpasswordconfirm', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-10">
                            <input type="submit" value="Change Password" class="btn btn-primary">
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
@endsection