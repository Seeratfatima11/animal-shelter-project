@extends('layouts.app')

@section('content')
<section class="adopt-section">
    <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-md-12">
            <h1 class="this-title mb-4">Volunteer With Us</h1>
            <p class="sub-head mb-0">Join our team of dedicated volunteers and make a difference in animals' lives</p>
        </div>
        </div>
    </div>
</section>
<section>
    <div class="volunteer-page py-5">
    <div class="container-fluid px-5">

    <div class="row g-4">

    <!-- LEFT SIDE -->
    <div class="col-lg-4">
    <div class="volunteer-info-card">

    <h4 class="logo-title">LOGO</h4>

    <h5 class="section-title">Why Volunteer?</h5>

    <div class="info-block">
    <h6>Make a Real Impact</h6>
    <p>Your time and care directly improves the lives of animals waiting for their forever homes.</p>
    </div>

    <div class="info-block">
    <h6>Learn New Skills</h6>
    <p>Gain experience in animal care, customer service, and team collaboration.</p>
    </div>

    <div class="info-block">
    <h6>Join a Community</h6>
    <p>Connect with like-minded animal lovers and build lasting friendships.</p>
    </div>

    <div class="info-block">
    <h6>Flexible Schedule</h6>
    <p>We offer various shifts and opportunities to fit your availability.</p>
    </div>

    <hr class="custom-divider">

    <h5 class="require-title mt-4">Requirements</h5>

    <ul class="requirements-list">
    <li>Must be 18 years or older</li>
    <li>Commit to 4 hours per week</li>
    <li>Complete orientation training</li>
    <li>Pass background check</li>
    </ul>

    </div>
    </div>


    <!-- RIGHT SIDE -->
    <div class="col-lg-8">

    <div class="volunteer-form-card">

    <h4 class="form-title">Volunteer Application</h4>
    <p>Please fill out the form below to apply. All fields are required unless marked optional.</p>

    <form class="volunteer-form">

    <div class="form-group">
    <label class="my-labels">Name</label>
    <input class="form-control my-input" type="text">
    </div>

    <div class="form-group">
    <label class="my-labels">Address</label>
    <input type="text" class="form-control my-input">
    </div>

    <div class="form-group">
    <label class="my-labels">Phone Number</label>
    <input type="number" class="form-control my-input">
    </div>

    <div class="form-group">
    <label class="my-labels">Age (Age must be greater than 18)</label>
    <input type="number" class="form-control my-input">
    </div>

    <div class="form-group">
    <label class="my-labels">Prefer Volunteer Role</label>

    <select class="form-select my-input">
        <option selected disabled>Select Role</option>
        <option>Animal Care</option>
        <option>Adoption Support</option>
        <option>Rescue Team</option>
        <option>Event Volunteer</option>
    </select>

</div>

    <div class="form-group mb-5">
    <label class="my-labels">Availability</label>

    <select class="form-select my-input">
        <option selected disabled>Select Availability</option>
        <option>Full-time</option>
        <option>Part-time</option>
        <option>Weekends Only</option>
        <option>Evenings Only</option>
        <option>Flexible</option>
    </select>

    </div>

    <div class="form-group">
        <label class="my-labels">Do you have any allergy?</label>

        <div class="custom-check-group d-flex align-items-center gap-5">

            <label class="custom-check d-flex  align-items-center gap-2">
                <input type="radio" name="allergy" value="yes" class="my-radios">
                <span class="check-box"></span>
                Yes
            </label>

            <label class="custom-check d-flex align-items-center gap-2">
                <input type="radio" name="allergy" value="no">
                <span class="check-box"></span>
                No
            </label>

        </div>
    </div>

    <div class="form-group">
        <label class="my-labels">Have you worked as a volunteer before?</label>

        <div class="custom-check-group d-flex align-items-center gap-5">

            <label class="custom-check d-flex  align-items-center gap-2">
                <input type="radio" name="volunteer" value="yes1" class="my-radios">
                <span class="check-box"></span>
                Yes
            </label>

            <label class="custom-check d-flex align-items-center gap-2">
                <input type="radio" name="volunteer" value="no1">
                <span class="check-box"></span>
                No
            </label>

        </div>
    </div>

    <div class="form-group">
        <label class="my-labels"> What is the name of the organization where you worked or volunteered before?</label>
        <input class="form-control my-input" type="text">
    </div>

    <div class="form-group">
        <label class="my-labels">Why are you interested in volunteering at animal  Shelter?</label>
        <input class="form-control my-input" type="text">
    </div>


    <a href="#" class="submit-btn">Submit Application</a>

    </form>

    </div>

    </div>

    </div>
    </div>
</div>

    </section>

@endsection