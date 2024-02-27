@extends('layouts.app')

@section('content')
    <h1>Groups</h1>

    <a href="{{ route('groups.create') }}">Создать новую группу</a>

    @if ($groups->count() > 0)
        <ul>
            @foreach($groups as $group)
            <li>
                <a href="{{ route('groups.show', ['group' => $group->id]) }}">{{ $group->title }}
                </a>
            </li>
            @endforeach
        </ul>
    @else
        <p>No groups available.</p>
    @endif
@endsection