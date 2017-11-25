@extends('admin.app')

@section('title', 'Database Utilities')
@section('content')

    <h2>Database Utilities</h2>

    <p>&nbsp;</p>

    <table style="width:95%;">
        <tbody>
            <tr>
                <td>
                    <div style="text-align:center;padding-bottom:20px;">
                        <a href="{{ route('databasebackup') }}">
                            <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('/Content/images/icons/64x64/DatabaseBackup.png') }}" border="0" />
                            <br />
                            Backup
                        </a>
                    </div>
                </td>

                <td>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <a href="{{ route('databasequery') }}">
                            <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('/Content/images/icons/64x64/DatabaseQuery.png') }}" border="0" />
                            <br />
                            Query SQL
                        </a>
                    </div>
                </td>
                <td>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <a href="{{ route('databaseexecute') }}">
                            <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('/Content/images/icons/64x64/DatabaseExecute.png') }}" border="0" />
                            <br />
                            Execute SQL
                        </a>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

@endsection