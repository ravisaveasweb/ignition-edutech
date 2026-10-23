{{-- <x-frontend-header />
<x-study-india-header /> --}}

{{-- <x-frontend-header /> --}}

@if (session('study_abroad_user_id'))
    <x-study-abroad-header />
@elseif (session('study_india_user_id'))
    <x-study-india-header />
@else
    <x-frontend-header />
@endif

<link rel="stylesheet" href="{{ asset('css/student-questions.css') }}?v=4">

<main class="iq-create-page">
    <div class="iq-create-container">

        <a href="{{ route('questions.index') }}" class="iq-create-back">
            <i class="bi bi-arrow-left"></i>
            Back to Student Q&A
        </a>

        <section class="iq-create-card">

            <div class="iq-create-heading">
                <div class="iq-create-icon">
                    <i class="bi bi-chat-square-text"></i>
                </div>

                <div>
                    <h1>Ask the Student Community</h1>
                    <p>
                        Have a question about admissions, college fees, placements,
                        or campus life? Get help from fellow students.
                    </p>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <p class="mb-2">Please correct the following errors:</p>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('questions.store') }}" method="POST">
                @csrf

                <div class="iq-create-field">
                    <label for="title">
                        Question Title <span>*</span>
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="@error('title') is-invalid @enderror"
                        maxlength="180"
                        value="{{ old('title') }}"
                        placeholder="e.g. What are the admission requirements for MBA?"
                        required
                    >

                    @error('title')
                        <small class="iq-create-error">{{ $message }}</small>
                    @enderror

                    <small class="iq-create-hint">
                        Write a clear title so other students can understand your question.
                    </small>
                </div>

                <div class="iq-create-field">
                    <label for="description">
                        Question Details <span>*</span>
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        class="@error('description') is-invalid @enderror"
                        rows="6"
                        maxlength="5000"
                        placeholder="Explain your question and include any relevant details..."
                        required
                    >{{ old('description') }}</textarea>

                    @error('description')
                        <small class="iq-create-error">{{ $message }}</small>
                    @enderror

                    <small class="iq-create-hint">
                        Avoid sharing personal information such as passwords or OTPs.
                    </small>
                </div>

                <div class="iq-create-field">
                    <label for="category">
                        Category <span>*</span>
                    </label>

                    <select
                        id="category"
                        name="category"
                        class="@error('category') is-invalid @enderror"
                        required
                    >
                        <option value="">Choose a category</option>

                        @foreach ($categories as $category)
                            <option
                                value="{{ $category }}"
                                @selected(old('category') === $category)
                            >
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>

                    @error('category')
                        <small class="iq-create-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="iq-create-field">
                    <label for="college_name">
                        College or University
                        <span class="iq-create-optional">(Optional)</span>
                    </label>

                    <input
                        type="text"
                        id="college_name"
                        name="college_name"
                        class="@error('college_name') is-invalid @enderror"
                        maxlength="255"
                        value="{{ old('college_name') }}"
                        placeholder="Enter the college or university name"
                    >

                    @error('college_name')
                        <small class="iq-create-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="iq-create-actions">
                    <a href="{{ route('questions.index') }}" class="iq-create-cancel">
                        Cancel
                    </a>

                    <button type="submit" class="iq-create-submit">
                        <i class="bi bi-send"></i>
                        Post Question
                    </button>
                </div>
            </form>
        </section>

        <div class="iq-create-tip">
            <i class="bi bi-lightbulb"></i>
            <div>
                <strong>Tip for a helpful answer</strong>
                <p>
                    Include relevant details and select the most appropriate category
                    to help other students respond accurately.
                </p>
            </div>
        </div>

    </div>
</main>

<x-frontend-footer />
