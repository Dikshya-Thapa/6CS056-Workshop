
<header class="topbar">
    <nav class="nav-inner" aria-label="Main navigation">

        <a href="{{ route('students.index') }}" class="brand">
            <span class="brand-mark">TI</span>

            <span>
                Training <strong>Institute</strong>
            </span>
        </a>

        <div class="nav-links">

            <a href="{{ route('students.index') }}"
               class="{{ request()->routeIs('students.*') ? 'active' : '' }}"
               @if(request()->routeIs('students.*')) aria-current="page" @endif>
                Students
            </a>

            <a href="{{ route('courses.index') }}"
               class="{{ request()->routeIs('courses.*') ? 'active' : '' }}"
               @if(request()->routeIs('courses.*')) aria-current="page" @endif>
                Courses
            </a>

        </div>
    </nav>
</header>
