
<?php

use App\Http\Controllers\StudentController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Student Routes - Workshop 2 MVC
|--------------------------------------------------------------------------
|
| Student CRUD operations are now handled by StudentController.
| Route::resource automatically creates seven RESTful routes.
|
*/

Route::resource('students', StudentController::class);

/*
|--------------------------------------------------------------------------
| Course Routes - Workshop 1
|--------------------------------------------------------------------------
|
| These routes will be moved to CourseController in Commit 2.
|
*/

// Display Course Creation Form
Route::get('/course/create', function () {
    return view('course.create');
});

// List All Courses
Route::get('/courses', function () {
    $courses = Course::all();

    return view('course.list', [
        'courses' => $courses,
    ]);
})->name('courses.index');

// Edit Course Form
Route::get('/courses/{id}/edit', function ($id) {
    $course = Course::findOrFail($id);

    return view('course.edit', [
        'course' => $course,
    ]);
});

// Show Course Details
Route::get('/courses/{id}', function ($id) {
    $course = Course::findOrFail($id);

    return view('course.detail', [
        'course' => $course,
    ]);
});

// Store New Course
Route::post('/course', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'duration' => 'required|integer|min:1',
        'fee' => 'required|numeric|min:0',
        'difficulty' => 'required|in:Easy,Medium,Hard',
        'is_active' => 'nullable|boolean',
    ]);

    $validated['is_active'] = $request->boolean('is_active');

    $course = Course::create($validated);

    return redirect()
        ->route('courses.index')
        ->with(
            'success',
            "Course {$course->name} created successfully!"
        );
});

// Update Existing Course
Route::put('/courses/{id}', function (Request $request, $id) {
    $course = Course::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'duration' => 'required|integer|min:1',
        'fee' => 'required|numeric|min:0',
        'difficulty' => 'required|in:Easy,Medium,Hard',
        'is_active' => 'nullable|boolean',
    ]);

    $validated['is_active'] = $request->boolean('is_active');

    $course->update($validated);

    return redirect('/courses/' . $course->id)
        ->with('success', 'Course updated successfully!');
});

// Delete Course
Route::delete('/courses/{id}', function ($id) {
    $course = Course::findOrFail($id);

    $course->delete();

    return redirect()
        ->route('courses.index')
        ->with('success', 'Course deleted successfully!');
});
