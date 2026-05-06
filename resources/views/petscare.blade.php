@extends('layouts.app')

@section('content')

<section class="pet-hero-section">

    <div class="container text-center">

        <!-- Badge -->
        <div class="hero-badge">
            ✨ Complete Pet Care Guide
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
                🐶 Dog Care
            </button>

            <button class="tab-btn">
                🐱 Cat Care
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

                <div class="card-img">
                    <img src="{{ asset('images/nutrition.jpg') }}" alt="">
                </div>

                <div class="card-body">
                    <h5>Nutrition</h5>

                    <ul class="pet-list">
                        <li><span>Feed 2x daily</span> for adults, 3-4x for puppies</li>
                        <li class="muted">High-quality protein as first ingredient</li>
                        <li><span>Fresh water</span> always available</li>
                        <li><span>Treats limited</span> to 10% of daily calories</li>
                        <li><span>Portion control</span> based on weight</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">

                <div class="card-img">
                    <img src="{{ asset('images/exercise.jpg') }}" alt="">
                </div>

                <div class="card-body">
                    <h5>Exercise</h5>

                    <ul class="pet-list">
                        <li><span>30-60 minutes</span> of daily exercise</li>
                        <li><span>2-3 walks</span> split throughout day</li>
                        <li><span>Interactive play</span> for stimulation</li>
                        <li><span>Puzzle toys</span> keep minds active</li>
                        <li><span>Safe leash</span> in public areas</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">

                <div class="card-img bg-light d-flex justify-content-center align-items-center">
                    <i class="bi bi-scissors grooming-icon"></i>
                </div>

                <div class="card-body">
                    <h5>Grooming</h5>

                    <ul class="pet-list">
                        <li><span>Weekly brushing</span> (more for long hair)</li>
                        <li><span>Bath every 4-6 weeks</span></li>
                        <li><span>Nail trim</span> every 3-4 weeks</li>
                        <li><span>Teeth brushing</span> 2-3 times weekly</li>
                        <li><span>Ear checks</span> weekly</li>
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

                <div class="card-img">
                    <img src="{{ asset('images/health.jpg') }}" alt="">
                </div>

                <div class="card-body">
                    <h5>Health Care</h5>

                    <ul class="pet-list">
                        <li><span>Annual checkups</span> (more for puppies/seniors)</li>
                        <li><span>Stay current</span> on vaccinations</li>
                        <li><span>Monthly prevention</span> for fleas & ticks</li>
                        <li><span>Spay/neuter</span> between 6-9 months</li>
                        <li><span>Watch for</span> unusual behavior changes</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- TRAINING -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="pet-card">

                <div class="card-img bg-light d-flex justify-content-center align-items-center">
                    <i class="bi bi-book training-icon"></i>
                </div>

                <div class="card-body">
                    <h5>Training</h5>

                    <ul class="pet-list">
                        <li class="muted">Basic commands: Sit, Stay, Come</li>
                        <li><span>Positive reinforcement</span> works best</li>
                        <li><span>Short sessions</span> (5–15 minutes)</li>
                        <li><span>Early socialization</span> is crucial</li>
                        <li><span>Consistency</span> with all family members</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- HIGHLIGHT CARD -->
        <div class="col-12 col-md-12 col-lg-4">
            <div class="highlight-card">

                <h4 class="logo-text">LOGO</h4>
                <h6 class="highlight-title">Love & Attention</h6>

                <ul class="highlight-list">
                    <li>Daily bonding time <span>strengthens relationships</span></li>
                    <li>Cuddles and pets <span>reduce stress</span></li>
                    <li>Quality time <span>over quantity</span></li>
                    <li>Patience and understanding <span>always</span></li>
                    <li>Unconditional love <span>goes both ways</span></li>
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
            <span class="tips-icon">📌</span>
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
            <span class="tips-icon">📌</span>
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
