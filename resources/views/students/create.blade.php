@extends('layouts.app')

@section('content')
    <h1>Добавление студента в группу {{$group->name}}</h1>

    {{-- Форма для создания нового студента --}}
    <form method="POST" action="{{ route('students.store', ['group' => $group->id]) }}">
        @csrf
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" required>
        <label for="name">Имя:</label>
        <input type="text" name="name" required>
        {{-- Добавьте остальные поля формы по вашему усмотрению --}}
        <button type="submit">Добавить студента</button>
    </form>

    <a href="{{ route('groups.show', ['group' => $group->id]) }}">Назад к информации о группе</a>
@endsection
