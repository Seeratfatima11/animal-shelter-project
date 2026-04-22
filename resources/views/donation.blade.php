@extends('layouts.app')

@section('content')
<section class="adopt-section">
    <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-md-12">
            <h1 class="this-title mb-4">Support Our Mission</h1>
            <p class="sub-head mb-0">Your donation helps us save lives and find forever homes for animals in need</p>
        </div>
        </div>
    </div>
</section>


<section class="donation-page py-5">
<div class="container-fluid px-5">

<div class="row g-4">

    <!-- ================= LEFT SIDE (IMPACT CARD) ================= -->
    <div class="col-lg-4">
        <div class="impact-card">

            <h4 class="logo-title">LOGO</h4>

            <h5 class="section-title">Your Impact</h5>

            <!-- Impact Items -->
            <div class="impact-item">
                <h6>$25</h6>
                <p>Provides food and basic supplies for one animal for a week</p>
            </div>

            <div class="impact-item">
                <h6>$50</h6>
                <p>Covers vaccinations and health check for one animal</p>
            </div>

            <div class="impact-item">
                <h6>$100</h6>
                <p>Funds spay/neuter surgery for one animal</p>
            </div>

            <div class="impact-item">
                <h6>$250</h6>
                <p>Provides complete medical care and housing for one animal until adoption</p>
            </div>

            <hr class="custom-divider">

            <p class="impact-note">
               <span>100%</span>  of your donation goes directly to animal care.
                Your donation is tax-deductible.
            </p>

        </div>
    </div>


    <!-- ================= RIGHT SIDE (FORM) ================= -->
    <div class="col-lg-8">
        <div class="donation-form-card">

            <h3 class="form-title">Make a Donation</h3>

            <!-- ===== Donation Amount ===== -->
            <h6 class="form-subtitle">Donation Amount</h6>

            <div class="amount-options mb-4">

                <button type="button" class="amount-btn" data-amount="25">$25</button>
                <button type="button" class="amount-btn" data-amount="50">$50</button>
                <button type="button" class="amount-btn" data-amount="100">$100</button>
                <button type="button" class="amount-btn" data-amount="250">$250</button>

            </div>

<!-- Custom Amount -->
<input type="text" class="form-control custom-amount" placeholder="Custom Amount" readonly>

            <!-- ===== User Info ===== -->
            <h6 class="form-subtitle mt-4">Your Information</h6>

            <div class="form-group">
                <label class="donation-label">Name</label>
                <input type="text" class="form-control enter-input">
            </div>

            <div class="form-group">
                <label class="donation-label">Email Address</label>
                <input type="email" class="form-control enter-input">
            </div>

            <div class="form-group mb-5">
                <label class="donation-label">Phone Number (Optional)</label>
                <input type="text" class="form-control enter-input">
            </div>

            <!-- ===== Payment Info ===== -->
            <h6 class="form-subtitle mb-5">Payment Information</h6>

            <div class="form-group">
             <label class="donation-label">Card Number</label>

            <div class="input-with-icon">
                <i class="bi bi-credit-card"></i>
                <input type="number" class="form-control enter-input" placeholder="1234 5678 9012 3456">
            </div>

             </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="donation-label">Expiry Date</label>
                    <input type="date" class="form-control enter-input" placeholder="MM/YY">
                </div>

                <div class="col-md-6 form-group">
                    <label class="donation-label">CVV</label>
                    <input type="text" class="form-control enter-input" placeholder="123">
                </div>
            </div>

            <!-- ===== Total ===== -->
            <div class="total-box d-flex justify-content-between mt-5 mb-5">
                <span>Total Donation:</span>
                <strong>$0</strong>
            </div>

            <!-- ===== Button ===== -->
            <a href="#" class="donate-btn">
                Complete Donation
            </a>

        </div>
    </div>

</div>
</div>
</section>


@endsection