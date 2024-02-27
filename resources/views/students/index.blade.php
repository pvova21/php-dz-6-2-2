@extends('layouts.app')

@section('content')
    <h1>������ ��������� � ������ {{ $group->title }}</h1>
    
    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('students.show', ['group' => $group->id, 'student' => $student->id]) }}">{{ $student->surname }} {{ $student->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('groups.show', ['group' => $group->id]) }}">����� � ���������� � ������</a>
    <a href="{{ route('students.create', ['group' => $group->id]) }}">�������� ��������</a>
@endsection
