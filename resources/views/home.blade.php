@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="this-title">Find Your Perfect <br> Companion</h1>
            <p class="sub-head">Behind every innocent animal’s eyes, there is a story of pain, being left alone, and quiet hope. These animals don’t need much—only a little love, care, and a safe place to live. In our shelter, we help them get a new chance to trust humans again, heal from their past pain, and feel loved. You can be the reason their life changes, because even a small act of kindness can save their life. Every animal deserves a loving home. Browse our adoptable pets and give them a second chance at happiness.</p>
           <div class="fix btns d-flex gap-3 mb-2">
                <a href="{{ route('adopt') }}" class="browse-btn">Browse Pets</a>
                <a href="{{ route('stories') }}" class="border-btn">Success Stories</a>
           </div>
        </div>
        <div class="col-md-6 hero-image">
            <img src="{{ asset('images/hero-img.jpg') }}" alt="Hero Image" class="img-fluid">
        </div>
        </div>
    </div>
</section>

<!-- PETS SECTION -->
<section class="pets-sections mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Meet Our Pets</h2>
                <p class="pet-subhead">These adorable animals are waiting for their forever homes</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center px-5 mb-5">
            {{-- card 1 start --}}
            <div class="col-md-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-1.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Mex</h3>
                        <span class="pet-age">3 Years</span>
                    </div>

                    <p class="pet-breed">Mixed Breed</p>

                    <!-- Tags -->
                    <div class="pet-tags">
                        <span>Friendly</span>
                        <span>Energetic</span>
                        <span>Playful</span>
                    </div>

                    <p class="pet-desc">
                        A loyal dog with a flower in his mouth is not just a cute <br> moment, it's a beautiful reminder that love, loyalty, and <br> kindness still exist in the world.
                    </p>

                    <!-- Button -->
                    <a href="{{ route('pet.detail') }}" class="learn-btn">Learn more</a>

                </div>
            </div>
            </div>
            {{-- card 1 end --}}

            {{-- card 2 start --}}
            <div class="col-md-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-2.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Whiskers</h3>
                        <span class="pet-age">1 Years</span>
                    </div>

                    <p class="pet-breed">Brown Tabby</p>

                    <!-- Tags -->
                    <div class="pet-tags">
                        <span>Friendly</span>
                        <span>Energetic</span>
                        <span>Playful</span>
                    </div>

                    <p class="pet-desc">
                       A cat doesn’t ask for much, just a little love, a warm place <br> to rest, and in return it fills your life with peace, charm, <br> and endless companionship.
                    </p>

                    <!-- Button -->
                    <a href="{{ route('pet.detail') }}" class="learn-btn">Learn more</a>

                </div>
            </div>
            </div>
            {{-- card 2 end --}}

            {{-- card 3 start --}}
            <div class="col-md-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-3.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Rex</h3>
                        <span class="pet-age">4 Years</span>
                    </div>

                    <p class="pet-breed">Nova Scotia</p>

                    <!-- Tags -->
                    <div class="pet-tags">
                        <span>Friendly</span>
                        <span>Energetic</span>
                        <span>Playful</span>
                    </div>

                    <p class="pet-desc">
                       A loyal dog doesn’t just walk beside you, he fills your life with unconditional love, endless happiness, and memories that last forever.
                    </p>
                    <!-- Button -->
                    <a href="{{ route('pet.detail') }}" class="learn-btn">Learn more</a>

                </div>
            </div>
            </div>
            {{-- card 3 end --}}
        </div>
        <a href="{{ route('adopt') }}" class="viw-all">View All Available Pets</a>
    </div>
</section>

<!-- VOLUNTEER SECTION -->
<section class="volunteer-section mb-5">
<div class="container-fluid">
            <div class="row">
            <div class="col-md-12 text-center">
                <h2>How to be a volunteer</h2>
                <p class="volunteer-subhead">It’s about giving your heart to make the world a better place.</p>
            </div>
        </div>
        <div class="row px-5 mb-4">
            <!-- Image -->
            <div class="col-lg-6">
                <div class="volunteer-img">
                    <img src="{{ asset('images/volunteer.jpg') }}" alt="Volunteer" class="img-fluid">
                </div>
            </div>
             <!-- Content -->
            <div class="col-lg-6">
                <div class="volunteer-content">
                    <p>
                       It is the gentle act of giving your time, your energy, and your <br> heart to make someone else’s world a little brighter. A <br> volunteer may not seek recognition or reward, yet their small <br> acts of compassion create ripples of hope, care, and <br> humanity. In a world that often moves too fast, volunteers <br> remind us that true change begins with a simple choice — <br> the choice to help, to care, and to stand for others.
                    </p>
                    <p>
                       It is the quiet strength of people who choose kindness, <br> who step forward when someone needs help, and who <br> believe that even the smallest act of care can make a big <br> difference. A volunteer’s heart is filled with compassion, <br> and their actions plant seeds of hope, unity, and humanity <br> wherever they go. In every smile they create and every <br> hand they hold, they remind the world that true change <br> begins with selfless love.
                    </p>
                    <a href="{{ route('volunteer') }}" class="apply-btn">Apply</a>
                </div>
            </div>
        </div>
</div>
</section>

@endsection 