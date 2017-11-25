@extends('admin.app')

@section('title', 'Database Backup')
@section('content')
    <h2>Backup</h2>

    <form action="/Admin/DatabaseUtilities/Backup" method="post" novalidate="novalidate">
        <input name="__RequestVerificationToken" type="hidden" value="6S2G6QLDBA3pxtwoUrAcMeOcu_EyOceePm_KDuPbhEdqF7ILrSmNSfzBI_t19K2BgZulxNZDNIDaISgWWfanNCZz993thQm4H55fW4ipcY77PbfT9jNwgBOt36ZbODy9_fgMmKCbIUX9_lOOnBnXxA2">    <div class="form-horizontal">
            <h4>User</h4>
            <hr>


            <div class="form-group">
                <label class="control-label col-md-2" for="Databases">Database Name:</label>
                <div class="col-md-10">
                    <select data-val="true" data-val-required="The DatabaseName field is required." id="DatabaseName" name="DatabaseName">
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="Backup" class="btn btn-default">
                </div>
            </div>
        </div>
    </form>
    <div>
        <a href="{{ route('databaseutilities.index') }}">Back to List</a>
    </div>
@endsection


