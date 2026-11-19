<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        return view('student.list', [
            'students' => Student::all(),
        ]);
    }

    // Display student creation form
    public function create()
    {
        return view('student.create');
    }

    // Store new student
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $student = Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                "Student {$student->name} created successfully!"
            );
    }

    // Display student details
    public function show(Student $student)
    {
        return view('student.detail', [
            'student' => $student,
        ]);
    }

    // Display student edit form
    public function edit(Student $student)
    {
        return view('student.edit', [
            'student' => $student,
        ]);
    }

    // Update existing student
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate(
            $this->rules($student)
        );

        $student->update($validated);

        return redirect()
            ->route('students.show', $student)
            ->with('success', 'Student updated successfully!');
    }

    // Delete student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }

    // Shared validation rules for create and update
    private function rules(?Student $student = null): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\pL\s]+$/u',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('students', 'email')
                    ->ignore($student?->id),
            ],

            'phone' => [
                'required',
                'digits:10',
            ],

            'address' => [
                'nullable',
                'string',
                'max:500',
            ],

            'date_of_birth' => [
                'nullable',
                'date',
                'before_or_equal:today',
            ],
        ];
    }
}