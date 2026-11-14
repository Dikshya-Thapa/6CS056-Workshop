<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Training Institute')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="app-shell">

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-mark">TI</div>

            <div class="brand-title">
                Training Institute
            </div>

            <div class="brand-subtitle">
                Course Management System
            </div>
        </div>

        <div class="nav-title">Management</div>

        <nav class="sidebar-nav">
            <a href="/students" class="sidebar-link">
                👥 Students
            </a>

            <a href="/courses" class="sidebar-link">
                📚 Courses
            </a>

            <a href="/student/create" class="sidebar-link">
                ＋ Add Student
            </a>

            <a href="/course/create" class="sidebar-link">
                ＋ Add Course
            </a>
        </nav>

    </aside>

    <main class="main-area">

        <div class="topbar">
            <div class="topbar-title">
                Training Institute Management
            </div>

            <div class="badge">
                Workshop 1
            </div>
        </div>

        @yield('content')

    </main>

</div>

</body>
</html>