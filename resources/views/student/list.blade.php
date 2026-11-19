
<x-layouts.app title="Students">

    <div class="page-heading">
        <div>
            <span class="eyebrow">MANAGEMENT</span>
            <h1>Students</h1>
            <p class="muted">
                View and manage student records.
            </p>
        </div>

        <a href="{{ route('students.create') }}" class="btn">
            + Add student
        </a>
    </div>

    <div class="panel table-panel">
        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($students as $student)
                        <tr>
                            <td class="muted">
                                #{{ $student->id }}
                            </td>

                            <td>
                                <strong>{{ $student->name }}</strong>
                            </td>

                            <td>{{ $student->email }}</td>

                            <td>{{ $student->phone }}</td>

                            <td class="actions">
                                <a href="{{ route('students.show', $student) }}">
                                    View
                                </a>

                                <a href="{{ route('students.edit', $student) }}">
                                    Edit
                                </a>

                                <x-delete-form
                                    :action="route('students.destroy', $student)"
                                />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="empty">
                                No students found.
                                Create your first student to get started.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.app>
