@extends('admin.app')

@section('title', 'Page Manager')

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

    <div class="btn btn-default"><a href="{{ route('pagemanager.create') }}">Create New</a></div>
    <p></p>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    URL
                </th>
                <th>
                    Visible
                </th>
                <th>
                    Timestamp
                </th>
                <th>
                    UserName
                </th>
                <th></th>
            </tr>
			@foreach ($pages as $page)
            <tr>
                <td>
					{{ $page->title}}
                </td>
                <td>
					{{ $page->url}}
                </td>
                <td>
				{{ $page->visible}}
                </td>
                <td>
				{{ $page->timestamp}}
                </td>
                <td>
                    admin
                </td>
                <td>
                    <a href="{{ route('pagemanager.show', $page->id) }}" title="Details"><img alt="Details" class="icon" src="{{ asset('/Content/images/icons/16x16/Search.png') }}"></a>
					<a href="{{ route('pagemanager.edit', $page->id) }}" title="Edit"><img alt="Edit" class="icon" src="{{ asset('/Content/images/icons/16x16/Edit.png') }}"></a>
                    {!! Form::open(['id' => ('delete-form-'.$page->id), 'method' => 'DELETE','route' => ['pagemanager.destroy', $page->id],'style'=>'display:inline']) !!}
                    <a href="{{ route('pagemanager.destroy', $page->id) }}" onclick="return confirmDelete({{ $page->id }});">
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
	{!! $pages->links() !!}
</p>

@endsection