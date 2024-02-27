
@extends('layouts.app')

@section('content')
    <h1>Создать новую группу</h1>

    <form method="POST" action="{{ route('groups.store') }}">
        @csrf
        <label for="title">Название группы:</label>
        <input type="text" name="title" required>
        
        <label for="start_from">Дата создания:</label>
        <input type="date" name="start_from" required>

        <label for="is_active">Is Active:</label>
        <input type="checkbox" name="is_active" checked>

        <button type="submit">Создать группу</button>
    </form>

    <a href="{{ route('groups.index') }}">Вернутся в группу</a>
@endsection