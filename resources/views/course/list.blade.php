
<x-layouts.app title="Courses">

    <div class="page-heading">
        <div>
            <span class="eyebrow">MANAGEMENT</span>
            <h1>Courses</h1>

            <p class="muted">
                Organize the training courses available to students.
            </p>
        </div>

        <a href="{{ route('courses.create') }}" class="btn">
            + Add course
        </a>
    </div>

    <div class="panel table-panel">
        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <td class="muted">
                                #{{ $course->id }}
                            </td>

                            <td>
                                <strong>{{ $course->name }}</strong>
                            </td>

                            <td>
                                {{ $course->duration }} weeks
                            </td>

                            <td>
                                {{ number_format((float) $course->fee, 2) }}
                            </td>

                            <td>{{ $course->difficulty }}</td>

                            <td>
                                <span class="status {{ $course->is_active ? 'status-active' : 'status-inactive' }}">
                                    {{ $course->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>

                            <td class="actions">
                                <a href="{{ route('courses.show', $course) }}">
                                    View
                                </a>

                                <a href="{{ route('courses.edit', $course) }}">
                                    Edit
                                </a>

                                <x-delete-form
                                    :action="route('courses.destroy', $course)"
                                />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty">
                                No courses found.
                                Create your first course to get started.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.app>
