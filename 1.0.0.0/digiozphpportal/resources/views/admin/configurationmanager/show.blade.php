@extends('admin.app')

@section('title', 'Config Details')
@section('content')

    <div>
	    <hr />
        <dl class="dl-horizontal">
            <dt>
                Config Key
            </dt>

            <dd>
                {{ $config->configkey}}
            </dd>

            <dt>
                Config Value
            </dt>

            <dd>
                @if ($config->isencrypted)
                [XXX]
                @else
                {{ $config->configvalue}}
                @endif
            </dd>

            <dt>
                Is Encrypted
            </dt>

            <dd>
                {{ $config->isencrypted}}
            </dd>

        </dl>
    </div>
    <p>
        <a href="{{ route('configurationmanager.edit', $config->id) }}" class="btn btn-primary" >Edit</a>
        <a href="{{ route('configurationmanager.index') }}">Back to List</a>

    </p>

@endsection