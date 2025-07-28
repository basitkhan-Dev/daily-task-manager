@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <h2>All Tasks</h2>
    <a href="{{ route('tasks.create') }}">+ Create Task</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong> ({{ $task->status }})
                <br>
                {{ $task->due_date }}
                <br>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete task?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
