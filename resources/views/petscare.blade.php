@extends('layouts.app')

@section('content')

<section class="pet-hero-section">

    <div class="container text-center">

        <!-- Badge -->
        <div class="hero-badge">
            <i class="bi bi-magic"></i> Complete Pet Care Guide
        </div>

        <!-- Title -->
        <h1 class="hero-title">
            Everything Your Pet Needs to Thrive
        </h1>

        <!-- Subtitle -->
        <p class="hero-subtitle">
            Expert advice and essential tips to keep your furry friend healthy, happy, and full of life
        </p>

    </div>

    <!-- Bottom Tabs -->
    <div class="hero-tabs">
        <div class="tab-wrapper">

            <button class="tab-btn active">
                <i class="fa-solid fa-dog"></i> Dog Care
            </button>

            <button class="tab-btn">
                <i class="fa-solid fa-cat"></i> Cat Care
            </button>

        </div>
    </div>

</section>



<section class="featured-section py-5">
<div class="container">

    <div class="featured-card">

        <!-- IMAGE -->
        <img src="{{ asset('images/pet-1.jpg') }}" class="img-fluid featured-img" alt="Dog Care">

        <!-- OVERLAY -->
        <div class="featured-overlay">
            <h2>Dog Care Essentials</h2>
            <p>A complete guide to keeping your canine companion healthy and happy</p>
        </div>

    </div>

</div>
</section>




<section class="pet-cards-section py-5">
<div class="container">

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">
                <div class="card-body">
                    <h5>Nutrition</h5>

                    <ul class="pet-list">
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Feed 2x daily</span> for adults, 3-4x for puppies</li>
                        <li class="muted"><i class="bi bi-check-circle"></i> &nbsp; High-quality protein as first ingredient</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Fresh water</span> always available</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Treats limited</span> to 10% of daily calories</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Portion control</span> based on weight</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">

                <div class="card-body">
                    <h5>Exercise</h5>

                    <ul class="pet-list">
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>30-60 minutes</span> of daily exercise</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>2-3 walks</span> split throughout day</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Interactive play</span> for stimulation</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Puzzle toys</span> keep minds active</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp; <span>Safe leash</span> in public areas</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">
                <div class="card-body">
                    <h5>Grooming</h5>

                    <ul class="pet-list">
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Weekly brushing</span> (more for long hair)</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Bath every 4-6 weeks</span></li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Nail trim</span> every 3-4 weeks</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Teeth brushing</span> 2-3 times weekly</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Ear checks</span> weekly</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

</div>
</section>

<section class="pet-cards-section pb-5">
<div class="container">

    <div class="row g-4">

        <!-- HEALTH CARE -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">
                <div class="card-body">
                    <h5>Health Care</h5>

                    <ul class="pet-list">
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Annual checkups</span> (more for puppies/seniors)</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Stay current</span> on vaccinations</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Monthly prevention</span> for fleas & ticks</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Spay/neuter</span> between 6-9 months</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Watch for</span> unusual behavior changes</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- TRAINING -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">


                <div class="card-body">
                    <h5>Training</h5>

                    <ul class="pet-list">
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Basic commands</span>: Sit, Stay, Come</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Positive reinforcement</span> works best</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Short sessions</span> (5–15 minutes)</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Early socialization</span> is crucial</li>
                        <li><i class="bi bi-check-circle"></i> &nbsp;<span>Consistency</span> with all family members</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- HIGHLIGHT CARD -->
        <div class="col-12 col-md-12 col-lg-4">
            <div class="highlight-card">
                <h6 class="highlight-title">Love & Attention</h6>

                <ul class="highlight-list">
                    <li><i class="bi bi-check-circle"></i> &nbsp;<span>Daily bonding time</span> <span>strengthens relationships</span></li>
                    <li><i class="bi bi-check-circle"></i> &nbsp;<span>Cuddles and pets</span> <span>reduce stress</span></li>
                    <li><i class="bi bi-check-circle"></i> &nbsp;<span>Quality time</span> <span>over quantity</span></li>
                    <li><i class="bi bi-check-circle"></i> &nbsp;<span>Patience and understanding</span> <span>always</span></li>
                    <li><i class="bi bi-check-circle"></i> &nbsp;<span>Unconditional love</span> <span>goes both ways</span></li>
                </ul>

            </div>
        </div>

    </div>

</div>
</section>



<section class="pro-tips-section py-5">
<div class="container">

    <div class="tips-wrapper">

        <!-- HEADER -->
        <div class="tips-header">
            <i class="bi bi-magic"></i>
            <h4>Pro Tips for Dog Parents</h4>
        </div>

        <!-- GRID -->
        <div class="row g-4 mt-2">

            <!-- CARD 1 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot green"></span> Puppy Proofing</h6>
                    <p>
                        Remove hazards like electrical cords, toxic plants, and small objects.
                        Create a safe space with a crate or pen for unsupervised time.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot blue"></span> Exercise Variety</h6>
                    <p>
                        Mix up activities with walks, fetch, swimming, and hiking.
                        Prevent boredom and build strength.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot pink"></span> Mental Stimulation</h6>
                    <p>
                        Use puzzle feeders, hide-and-seek games, and rotate toys
                        to keep your dog mentally engaged.
                    </p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot brown"></span> Know Your Vet</h6>
                    <p>
                        Establish a relationship with your vet before emergencies.
                        Keep records organized and ask questions during checkups.
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>
</section>

<section class="pro-tips-section py-5">
<div class="container">

    <div class="tips-wrapper">

        <!-- HEADER -->
        <div class="tips-header">
            <i class="fa-solid fa-circle-exclamation"></i>
            <h4>Emergency Care</h4>
        </div>

        <!-- GRID -->
        <div class="row g-4 mt-2">

            <!-- CARD 1 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot green"></span> Puppy Proofing</h6>
                    <p>
                        Remove hazards like electrical cords, toxic plants, and small objects.
                        Create a safe space with a crate or pen for unsupervised time.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot blue"></span> Exercise Variety</h6>
                    <p>
                        Mix up activities with walks, fetch, swimming, and hiking.
                        Prevent boredom and build strength.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot pink"></span> Mental Stimulation</h6>
                    <p>
                        Use puzzle feeders, hide-and-seek games, and rotate toys
                        to keep your dog mentally engaged.
                    </p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-12 col-md-6">
                <div class="tip-card">
                    <h6><span class="dot brown"></span> Know Your Vet</h6>
                    <p>
                        Establish a relationship with your vet before emergencies.
                        Keep records organized and ask questions during checkups.
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>
</section>


<section class="cta-section py-5">
<div class="container">

    <div class="cta-box text-center">

        <h2 class="cta-logo">LOGO</h2>

        <h3 class="cta-title">
            Ready to Start Your Journey?
        </h3>

        <p class="cta-subtitle">
            Our team is here to support you every step of the way. Have questions?
            We're just a click away!
        </p>

        <!-- BUTTONS -->
        <div class="cta-buttons mt-4">

            <a href="#" class="btn btn-light cta-btn">
                Contact Our Team →
            </a>

            <a href="#" class="btn btn-danger cta-btn-outline">
                Meet Our Pets ❤
            </a>

        </div>

    </div>

</div>
</section>

@endsection
