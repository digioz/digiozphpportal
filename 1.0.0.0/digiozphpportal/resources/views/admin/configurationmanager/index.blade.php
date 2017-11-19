@extends('admin.app')

@section('title', 'Configuration Manager')

@section('head')
<script>
    function confirmDelete($pageid) {
    var result = confirm('Are you sure you want to delete?');

    if (result) {
            // return true;
            event.preventDefault();document.getElementById('delete-form-' + $pageid).submit();
        } else {
            return false;
        }
    }
</script>
@endsection

@section('content')

    <div class="btn btn-default"><a href="{{ route('configurationmanager.create') }}">Create New</a></div>
    <p></p>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    Config Key
                </th>
                <th>
                    Config Value
                </th>
                <th>
                    Is Encrypted
                </th>
                <th></th>
            </tr>
			@foreach ($configs as $config)
            <tr>
                <td>
					{{ $config->configkey}}
                </td>
                <td>
                    @if ($config->isencrypted)
                        [XXX]
                    @else
					    {{ $config->configvalue}}
                    @endif
                </td>
                <td>
				    {{ $config->isencrypted}}
                </td>
                <td>
                    <a href="{{ route('configurationmanager.show', $config->id) }}" title="Details"><img alt="Details" class="icon" src="{{ asset('/Content/images/icons/16x16/Search.png') }}"></a>
                    <a href="{{ route('configurationmanager.edit', $config->id) }}" title="Edit">
                        <img alt="Edit" class="icon" src="{{ asset('/Content/images/icons/16x16/Edit.png') }}" />
                    </a>
                    {!! Form::open(['id' => ('delete-form-'.$config->id), 'method' => 'DELETE','route' => ['configurationmanager.destroy', $config->id],'style'=>'display:inline']) !!}
                    <a href="{{ route('configurationmanager.destroy', $config->id) }}" onclick="return confirmDelete({{ $config->id }});">
                        <img alt="Delete" class="icon" src="{{ asset('/Content/images/icons/16x16/Cancel.png') }}" />
                    </a>
                    {!! Form::submit('Delete', ['class' => 'btn btn-primary', 'style'=>'display:none']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<p>
	{!! $configs->links() !!}
</p>

@endsection