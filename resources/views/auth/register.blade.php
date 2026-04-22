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
            <div class="col-md-4  col-lg-5">
                <div class="login-card">
                    <div class="logo">
                        <img src="{{ asset('images/LOGO.png') }}" alt="Logo">
                    </div>
                    <h6>Please enter your details here</h6>
                    <h4>Create Account</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                               <input type="text" class="form-control my-inputs" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                               <input type="email" class="form-control my-inputs" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                              <input type="tel" class="form-control my-inputs" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Enter your phone number" inputmode="numeric" maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'')" >
                            </div>
                             <div class="mb-3">
                               <input type="password" class="form-control my-inputs" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter your Passowrd">
                            </div>
                             <div class="mb-3">
                               <input type="password" class="form-control my-inputs" id="exampleInputPassword2" aria-describedby="passwordHelp" placeholder="Confirm Password">
                            </div>
                            <div class="d-grid">
                                <a href="#" class="logins-btn">Register</a>
                            </div>
                             <div class="signin gap-2">
                                <img src="{{ asset('images/google.svg') }}" alt="Logo">
                                <a href="#">Sign up with google</a>
                            </div>
                            <h5 class="end-line">Already have an account? <a href="#">Login</a></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>      
    </div>
</div>

</body>
</html>