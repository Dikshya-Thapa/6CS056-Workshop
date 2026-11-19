
@php
    $course = $course ?? new \App\Models\Course([
        'is_active' => true
    ]);
@endphp

<div class="form-grid">

    <x-form-input
        name="name"
        label="Course name"
        :value="$course->name"
        required
    />

    <x-form-input
        name="duration"
        label="Duration (weeks)"
        type="number"
        min="1"
        :value="$course->duration"
        required
    />

    <x-form-input
        name="fee"
        label="Fee"
        type="number"
        step="0.01"
        min="0"
        :value="$course->fee"
        required
    />

    <div class="form-group">
        <label for="difficulty">Difficulty</label>

        <select
            name="difficulty"
            id="difficulty"
            class="input @error('difficulty') invalid @enderror"
            required
        >
            @foreach(['Easy', 'Medium', 'Hard'] as $level)
                <option
                    value="{{ $level }}"
                    @selected(old('difficulty', $course->difficulty) === $level)
                >
                    {{ $level }}
                </option>
            @endforeach
        </select>

        @error('difficulty')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="full-width">
        <x-form-textarea
            name="description"
            label="Description"
            :value="$course->description"
            rows="3"
        />
    </div>

    <div class="full-width form-group checkbox">
        <input type="hidden" name="is_active" value="0">

        <label>
            <input
                type="checkbox"
                name="is_active"
                value="1"
                @checked(old('is_active', $course->is_active))
            >

            Active course
        </label>

        @error('is_active')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

</div>
