@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <h2>Create Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @include('tasks.form', ['button' => 'Create'])
    </form>
@endsection
