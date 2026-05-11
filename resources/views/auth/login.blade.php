<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container-fluid p-0">
    <div class="bg-img">
        <div class="row justify-content-center p-5">
            <div class="col-md-5 col-lg-5">
                <div class="login-card">
                    <div class="logo">
                        <img src="{{ asset('images/animal.png') }}" alt="Logo">
                    </div>
                    <h4>Welcome Back</h4>
                    <h6>Please enter your details here</h6>

                    {{-- ✅ Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- ✅ Login Failed / General Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                {{-- Email --}}
                                <div class="mb-3">
                                    <input type="email" name="email" id="exampleInputEmail1"
                                        class="form-control my-inputs @error('email') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="mb-3">
                                    <input type="password" name="password" id="exampleInputPassword1"
                                        class="form-control my-inputs @error('password') is-invalid @enderror"
                                        aria-describedby="passwordHelp"
                                        placeholder="Password" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <a href="#" class="forgot-password d-flex justify-content-end">Forgot password?</a>

                                <div class="d-grid">
                                    <button type="submit" class="logins-btn">Login</button>
                                </div>

                                <div class="signin gap-2">
                                    <img src="{{ asset('images/google.svg') }}" alt="google">
                                    <a href="#">Sign in with google</a>
                                </div>

                                <h5 class="end-line">Don't have an account? <a href="{{ route('register') }}">Sign up</a></h5>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>