<style>
.study-login-wrapper {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 20px;
    background: #f7f8fa;
}

.study-login-card {
    width: 100%;
    max-width: 440px;
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #eee;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
}

.study-login-header {
    padding: 22px 25px;
    text-align: center;
    background: #f5820b;
    color: #fff;
}

.study-login-header h4 {
    margin: 0;
    font-size: 21px;
    font-weight: 700;
}

.study-login-header p {
    margin: 6px 0 0;
    font-size: 13px;
    opacity: 0.9;
}

.study-login-body {
    padding: 28px;
}

.study-login-label {
    display: block;
    margin-bottom: 7px;
    color: #333;
    font-size: 13px;
    font-weight: 600;
}

.study-login-input {
    width: 100%;
    height: 46px;
    padding: 0 14px;
    border: 1px solid #ddd;
    border-radius: 7px;
    outline: none;
    font-size: 14px;
    transition: 0.2s ease;
}

.study-login-input:focus {
    border-color: #f5820b;
    box-shadow: 0 0 0 3px rgba(245, 130, 11, 0.10);
}

.study-login-input.is-invalid {
    border-color: #dc3545;
}

.study-login-error {
    margin-top: 6px;
    color: #dc3545;
    font-size: 12px;
}

.study-login-alert {
    margin-bottom: 20px;
    padding: 10px 13px;
    border-radius: 7px;
    background: #fdeaea;
    color: #dc3545;
    font-size: 13px;
}

.study-login-btn {
    width: 100%;
    height: 44px;
    margin-top: 8px;
    border: 0;
    border-radius: 7px;
    background: #f5820b;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.25s ease;
}

.study-login-btn:hover {
    background: #dc7006;
    transform: translateY(-1px);
    box-shadow: 0 5px 14px rgba(245, 130, 11, 0.20);
}

@media (max-width: 600px) {
    .study-login-wrapper {
        padding: 30px 15px;
    }

    .study-login-body {
        padding: 22px;
    }
}
</style>


<div class="study-login-wrapper">
    <div class="study-login-card">

        <div class="study-login-header">
            <h4>Login to Your Application</h4>
            <p>Enter your registered email to continue</p>
        </div>

        <div class="study-login-body">

            @if (session('error'))
                <div class="study-login-alert">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('study-abroad.login.submit') }}" method="POST">
                @csrf

                <div class="study-login-field">
                    <label for="email" class="study-login-label">
                        Registered Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="study-login-input @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >

                    @error('email')
                        <div class="study-login-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="study-login-btn">
                    Send OTP
                </button>
            </form>

        </div>
    </div>
</div>