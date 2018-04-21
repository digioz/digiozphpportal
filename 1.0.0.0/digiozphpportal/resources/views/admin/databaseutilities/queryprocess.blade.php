@extends('admin.app')

@section('title', 'Database Query Process')
@section('content')

<table class="table">
    <tbody>
        @foreach ($datas as $data)
        <tr>
            <td>
                {{ $data->id }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<div>
    <a href="{{ route('databaseutilities.index') }}">Back to List</a>
</div>

@endsection

