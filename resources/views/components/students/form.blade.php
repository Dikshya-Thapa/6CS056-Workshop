
@props(['student'])

<div class="form-grid">

    <x-form-input
        name="name"
        label="Full name"
        :value="$student->name"
        required
    />

    <x-form-input
        name="email"
        label="Email address"
        type="email"
        :value="$student->email"
        required
    />

    <x-form-input
        name="phone"
        label="Phone number"
        :value="$student->phone"
        required
    />

    <x-form-input
        name="date_of_birth"
        label="Date of birth"
        type="date"
        :value="$student->date_of_birth?->format('Y-m-d')"
    />

    <div class="full-width">
        <x-form-textarea
            name="address"
            label="Address"
            :value="$student->address"
            rows="3"
        />
    </div>

</div>
