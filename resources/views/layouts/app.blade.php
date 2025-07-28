<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title inertia>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="bg-gray-100 font-sans">
@inertia
<div class="wrapper">
    {{-- Sidebar --}}
    <div class="sidebar">
        <h2>Admin</h2>
       <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('tasks.create') }}">Create Task</a>
        <a href="{{ route('tasks.index') }}">View Tasks</a>

    </div>

    {{-- Main Content Area --}}
    <div class="main-content">
        @include('layouts.header')

        <div class="content">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</div>

</body>
</html>
