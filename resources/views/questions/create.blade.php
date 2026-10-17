<x-frontend-header />

<main class="container py-5">
    <h1>Ask a Question</h1>
    <p>Share your question with the Ignition Edutech student community.</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <p>Please correct the following errors:</p>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('questions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Question Title</label>
            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                maxlength="180" value="{{ old('title') }}" placeholder="Enter your question in a few words" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Question Details</label>
            <textarea id="description" name="description"
                class="form-control @error('description') is-invalid @enderror" rows="5" maxlength="5000"
                placeholder="Explain your question and include relevant details..."
                required>{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" name="category" class="form-select @error('category') is-invalid @enderror" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}" @selected(old('category') === $category)>
                        {{ $category }}
                    </option>
                @endforeach
            </select>
            @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="college_name" class="form-label">College Name (Optional)</label>
            <input type="text" id="college_name" name="college_name"
                class="form-control @error('college_name') is-invalid @enderror" maxlength="255"
                value="{{ old('college_name') }}" placeholder="Enter the college or university name">
            @error('college_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Post Question</button>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</main>

<x-frontend-footer />