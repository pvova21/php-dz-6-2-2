@extends('layouts.app')

@section('content')
    <h1>{{ $group->title }}</h1>
    <p>Start From: {{ $group->start_from }}</p>
    <p>Is Active: {{ $group->is_active ? 'Yes' : 'No' }}</p>

    <a href="{{ route('groups.students.create', ['group' => $group->id]) }}">Создание нового студента</a>

    @if ($students->count() > 0)
        <h2>Students:</h2>
        <ul>
            @foreach($students as $student)
                <li>
                    <a href="{{ route('students.show', ['group' => $group->id, 'student' => $student->id]) }}">
                    {{ $student->surname }} {{ $student->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No students in this group.</p>
    @endif

    <a href="{{ route('groups.index') }}">Back to Groups</a>
@endsection