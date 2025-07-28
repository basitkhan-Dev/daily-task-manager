@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @method('PUT')
        @include('tasks.form', ['button' => 'Update'])
    </form>
@endsection
