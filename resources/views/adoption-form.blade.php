@extends('layouts.app')

@section('content')

<section class="pet-detail">
    <div class="container-fluid px-5">

        <!-- Back -->
        <a href="#" class="back-arrow">
            <i class="bi bi-arrow-left-short"></i>  Back
        </a>

        <div class="row g-4 align-items-start mb-5">

            <!-- LEFT IMAGE -->
            <div class="col-md-12 col-lg-6">
                <div class="pet-image">
                    <img src="{{ asset('images/pet-1.jpg') }}" alt="pet">
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-12 col-lg-6">
                <div class="pet-info-card sec-card">
                    <h3>Mex</h3>
                    <p>Mixed Breed</p>
                    <!-- INFO GRID -->
                <div class="row">

                    <!-- Age -->
                    <div class="col-6 col-md-4">
                        <div class="d-flex align-items-center gap-3 info-item">
                            
                            <div class="icon-box">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>

                            <div>
                                <small class="top-txt">Age</small>
                                <div class="end-txt">3 years</div>
                            </div>

                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="col-6 col-md-4">
                        <div class="d-flex align-items-center gap-3 info-item">
                            
                            <div class="icon-box">
                                <i class="bi bi-gender-trans"></i>
                            </div>

                            <div>
                                <small class="top-txt">Gender</small>
                                <div class="end-txt">Male</div>
                            </div>

                        </div>
                    </div>

                    <!-- Size -->
                    <div class="col-6 col-md-4">
                        <div class="d-flex align-items-center gap-3 info-item">
                            
                            <div class="icon-box">
                                <img src="{{ asset('images/size.svg') }}" alt="pet">
                            </div>

                            <div>
                                <small class="top-txt">Size</small>
                                <div class="end-txt">Medium</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            {{-- Pets Form Section --}}

            <div class="row">
                         <!-- ===== Pet Info ===== -->
                <h6 class="form-subtitle mt-4">
                    <ul>
                        <li>
                            Contact Information
                        </li>
                    </ul>
             </h6>

                <div class="form-group">
                    <label class="donation-label">Name</label>
                    <input type="text" class="form-control enter-input">
                </div>

                <div class="form-group">
                    <label class="donation-label">Phone Number (Optional)</label>
                    <input type="text" class="form-control enter-input">
                </div>

                <div class="form-group">
                    <label class="donation-label">Address</label>
                    <input type="text" class="form-control enter-input">
                </div>

                <div class="form-group">
                    <label class="donation-label">Age (Age must be 18⁺)</label>
                    <input type="text" class="form-control enter-input">
                </div>

                <div class="form-group">
                    <label class="donation-label">Why do you want to adopt this pet?v</label>
                    <input type="text" class="form-control enter-input">
                </div>

                <div class="form-group">
                    <label class="my-labels">Are you ready to the responsibility of this pet?</label>

                    <div class="custom-check-group d-flex align-items-center gap-5">

                        <label class="custom-check d-flex  align-items-center gap-2">
                            <input type="radio" name="responsibility" value="yes2" class="my-radios">
                            <span class="check-box"></span>
                            Yes
                        </label>

                        <label class="custom-check d-flex align-items-center gap-2">
                            <input type="radio" name="responsibility" value="no2">
                            <span class="check-box"></span>
                            No
                        </label>
                    </div>
                </div>

                {{-- Home Information --}}
                 <h6 class="form-subtitle mt-4">
                    <ul>
                        <li>Home Information</li>
                    </ul>
                </h6>

                <div class="form-group mb-4">
                    <label class="my-labels mb-3">Do you own or rent your home?</label>

                    <div class="custom-check-group d-flex align-items-center gap-5">

                        <label class="custom-check d-flex  align-items-center gap-2">
                            <input type="radio" name="home" value="own" class="my-radios">
                            <span class="check-box"></span>
                            own
                        </label>

                        <label class="custom-check d-flex align-items-center gap-2">
                            <input type="radio" name="home" value="rent">
                            <span class="check-box"></span>
                            rent
                        </label>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="my-labels mb-3">Do you have other pets?</label>

                    <div class="custom-check-group d-flex align-items-center gap-5">

                        <label class="custom-check d-flex  align-items-center gap-2">
                            <input type="radio" name="otherPets" value="yes3" class="my-radios">
                            <span class="check-box"></span>
                            Yes
                        </label>

                        <label class="custom-check d-flex align-items-center gap-2">
                            <input type="radio" name="otherPets" value="no3">
                            <span class="check-box"></span>
                            No
                        </label>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="my-labels mb-3">Have you adopted a pet before?</label>

                    <div class="custom-check-group d-flex align-items-center gap-5">

                        <label class="custom-check d-flex  align-items-center gap-2">
                            <input type="radio" name="adoptedBefore" value="yes4" class="my-radios">
                            <span class="check-box"></span>
                            Yes
                        </label>

                        <label class="custom-check d-flex align-items-center gap-2">
                            <input type="radio" name="adoptedBefore" value="no4">
                            <span class="check-box"></span>
                            No
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="donation-label">How many people live in your house hold?</label>
                    <input type="text" class="form-control enter-input">
                </div>

                <div class="form-group mb-4 mt-3">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="confirm">
                        <span class="checkmark"></span>

                        <span class="checkbox-text">
                            I confirmed that above information is true and accurate.
                        </span>
                    </label>
                </div>

                <!-- ===== Button ===== -->
                <a href="#" class="donate-btn">
                    Submit
                </a>
            </div>
        </div>


    </div>
</section>

@endsection