<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container-fluid p-0">
    <div class="bg-img">
        <div class="row justify-content-center p-5">
            <div class="col-md-4 col-lg-5">

                <div class="login-card">

                    <div class="logo">
                        <img src="{{ asset('images/animal.png') }}" alt="Logo">
                    </div>

                    <h4>Create Account</h4>
                    <h6>Please enter your details here</h6>

                    {{-- ✅ Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- ✅ General Error Message (optional, for non-field errors) --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">

                            <!-- ✅ FORM START -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                {{-- Name --}}
                                <div class="mb-3">
                                    <input type="text" name="name"
                                        class="form-control my-inputs @error('name') is-invalid @enderror"
                                        placeholder="Enter your name"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="mb-3">
                                    <input type="email" name="email"
                                        class="form-control my-inputs @error('email') is-invalid @enderror"
                                        placeholder="Enter your email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="mb-3">
                                    <input type="tel" name="phone"
                                        class="form-control my-inputs @error('phone') is-invalid @enderror"
                                        placeholder="Enter your phone number"
                                        inputmode="numeric" maxlength="11"
                                        value="{{ old('phone') }}"
                                        oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="mb-3">
                                    <input type="password" name="password"
                                        class="form-control my-inputs @error('password') is-invalid @enderror"
                                        placeholder="Enter your Password" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Confirm Password --}}
                                <div class="mb-3">
                                    <input type="password" name="password_confirmation"
                                        class="form-control my-inputs"
                                        placeholder="Confirm Password" required>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="logins-btn">Register</button>
                                </div>

                            </form>
                            <!-- ✅ FORM END -->

                            <div class="signin gap-2 mt-3">
                                <img src="{{ asset('images/google.svg') }}" alt="Logo">
                                <a href="#">Sign up with google</a>
                            </div>

                            <h5 class="end-line mt-3">
                                Already have an account?
                                <a href="{{ route('login') }}">Login</a>
                            </h5>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>