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

<p>
    {!! $datas->links() !!}
</p>


<div>
    <a href="{{ route('databaseutilities.query') }}">Back to Query</a>
</div>

@endsection

