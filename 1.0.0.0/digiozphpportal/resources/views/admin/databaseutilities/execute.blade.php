@extends('admin.app')

@section('title', 'Database Execute Query')
@section('content')
    <h2>Execute Command</h2>

    <h6></h6>

    <form action="/Admin/DatabaseUtilities/Execute" method="post" novalidate="novalidate">
        <input name="__RequestVerificationToken" type="hidden" value="KPlIH8xgRqpNi8LUBt2ek5WdoxAW09Xmm8FE7-5MF7xsQJdRBGhsQ8EAh-sJQDxchPA4aNb-mdFhmftG7AOdjRvl0qOlhnu312dj8O3Se4rSX0ItMQjuq-V3JMSCEBw3NBIt-vsNjKT5q6WhxEMzIw2">    <div class="form-horizontal">

            <div class="form-group">
                <label class="control-label col-md-2" for="QueryString">QueryString</label>
                <div class="col-md-10">
                    <textarea class="form-control" cols="20" data-val="true" data-val-required="The QueryString field is required." id="QueryString" name="QueryString" rows="2"></textarea>
                    <span class="field-validation-valid" data-valmsg-for="QueryString" data-valmsg-replace="true"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>

        </div>
    </form>
    <div>
        <a href="{{ route('databaseutilities.index') }}">Back to List</a>
    </div>
@endsection


