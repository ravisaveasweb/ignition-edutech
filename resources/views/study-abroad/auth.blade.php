
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h2 class="mb-4">Welcome to Study Abroad Application</h2>
            <p class="text-muted mb-4">Please choose an option to continue</p>

            <div class="d-grid gap-3 col-8 mx-auto">
                {{-- Register / New Application Button --}}
                <a href="{{ route('study-abroad.application') }}" class="btn btn-primary btn-lg">
                    New Application (Register)
                </a>

                {{-- Login for Existing Users Button --}}
                <a href="{{ route('study-abroad.login') }}" class="btn btn-outline-secondary btn-lg">
                    Already Applied? (Login via OTP)
                </a>
            </div>
        </div>
    </div>
</div>


