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
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                               <input type="email" class="form-control my-inputs" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                               <input type="password" class="form-control my-inputs" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Password">
                            </div>
                                 <a href="#" class="forgot-password d-flex justify-content-end">Forgot password?</a>
                            <div class="d-grid">
                                <a href="#" class="logins-btn">Login</a>
                            </div>
                             <div class="signin gap-2">
                                <img src="{{ asset('images/google.svg') }}" alt="google">
                                <a href="#">Sign in with google</a>
                            </div>
                            <h5 class="end-line">Don't have an account? <a href="#">Sign up</a></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>      
    </div>
</div>

</body>
</html>