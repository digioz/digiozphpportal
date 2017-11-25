@extends('admin.app')

@section('title', 'Database Query')
@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error: </strong>There were some problems with your input.
        <br />
        <br />
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(array('route' => 'databasequeryprocess','method'=>'POST')) !!}
        {{ csrf_field() }}
        
        <div class="form-group">
            <label class="control-label col-md-2" for="QueryString">Select Table</label>
            <div class="col-md-10">
                <select id="table" name="table" class="form-control">
                    @foreach ($tables as $table)
                        @foreach ($table as $key => $value)
                            <option>{{ $value }}</option>
                        @endforeach
                    @endforeach
                </select> 
            </div>
        </div>

        <p>&nbsp;</p>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div>
        </div>

    {!! Form::close() !!}

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>    

    <div>
        <a href="{{ route('databaseutilities.index') }}">Back to List</a>
    </div>

@endsection

