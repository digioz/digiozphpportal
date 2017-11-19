@extends('admin.app')

@section('title', 'Page Details')
@section('content')

    <h2>Details</h2>

    <div>
	    <hr />
        <dl class="dl-horizontal">
            <dt>
                Title
            </dt>

            <dd>
                {{ $page->title}}
            </dd>

            <dt>
                URL
            </dt>

            <dd>
                {{ $page->url}}
            </dd>

            <dt>
                Body
            </dt>

            <dd>
                {!! $page->body !!}
            </dd>

            <dt>
                Keywords
            </dt>

            <dd>
                {{ $page->keywords}}
            </dd>

            <dt>
                Description
            </dt>

            <dd>
                {{ $page->description}}
            </dd>

            <dt>
                Visible
            </dt>

            <dd>
                {{ $page->visible}}
            </dd>

            <dt>
                Create/Modified Date
            </dt>

            <dd>
                {{ $page->timestamp}}
            </dd>

            <dt>
                Create User Id
            </dt>

            <dd>
                {{ $page->user_id}}
            </dd>

        </dl>
    </div>
    <p>
        <a href="{{ route('pagemanager.edit', $page->id) }}" class="btn btn-primary" >Edit</a>
        <a href="{{ route('pagemanager.index') }}">Back to List</a>

    </p>

@endsection