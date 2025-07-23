<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="wrapper">
    {{-- Sidebar --}}
    <div class="sidebar">
        <h2>Admin</h2>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="#">Task Manager</a>
        <a href="#">Users</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
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
