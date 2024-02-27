@extends('layouts.app')

@section('content')
    <h1>Список студентов в группе {{ $group->title }}</h1>
    
    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('students.show', ['group' => $group->id, 'student' => $student->id]) }}">{{ $student->surname }} {{ $student->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('groups.show', ['group' => $group->id]) }}">Назад к информации о группе</a>
    <a href="{{ route('students.create', ['group' => $group->id]) }}">Добавить студента</a>
@endsection
