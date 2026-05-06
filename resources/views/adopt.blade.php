@extends('layouts.app')

@section('content')

<!-- Adoption Head SECTION -->
<section class="adopt-section">
    <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-md-12">
            <h1 class="this-title mb-4">Adoptable Pets</h1>
            <p class="sub-head mb-0">Meet our wonderful animals looking for their forever homes</p>
        </div>
        </div>
    </div>
</section>

{{-- Filter Section --}}
<section class="filter-box">
    <div class="container-fluid px-5">

        <div class="filter-card">

            <!-- Title -->
            <div class="this-fliter">
                <i class="bi bi-funnel-fill me-2 filter-icon"></i>
                <h5 class="">Filter By</h5>
            </div>

            <div class="row">

                <!-- Species -->
                <div class="col-md-6">
                    <p class="filter-label">Species</p>

                    <div class="filter-options">
                        <button class="filter-btn active">All</button>
                        <button class="filter-btn">Dogs</button>
                        <button class="filter-btn">Cats</button>
                    </div>
                </div>

                <!-- Size -->
                <div class="col-md-6">
                    <p class="filter-label">Size</p>

                    <div class="filter-options">
                        <button class="filter-btn active">All</button>
                        <button class="filter-btn">Small</button>
                        <button class="filter-btn">Medium</button>
                        <button class="filter-btn">Large</button>
                    </div>
                </div>

            </div>

        </div>

        <!-- Showing text -->
        <p class="pet-amount">Showing 8 pets</p>

        {{-- Pet Cards Row 1 Start --}}
        <div class="row d-flex justify-content-center mb-5">
            {{-- card 1 start --}}
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
        {{-- Pet Cards Row 1 End --}}


        {{-- Pet Cards Row 2 Start --}}
        <div class="row d-flex justify-content-center mb-5">
            {{-- card 1 start --}}
            <div class="col-md-6 col-lg-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-4.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Charlie</h3>
                        <span class="pet-age">3 Years</span>
                    </div>

                    <p class="pet-breed">Golden Retriever</p>

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
            <div class="col-md-6 col-lg-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-5.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Rocky</h3>
                        <span class="pet-age">1 Years</span>
                    </div>

                    <p class="pet-breed">Chihuahua</p>

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
            {{-- card 2 end --}}

            {{-- card 3 start --}}
            <div class="col-md-6 col-lg-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-6.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Luna</h3>
                        <span class="pet-age">1 Years</span>
                    </div>

                    <p class="pet-breed">British Shorthair</p>

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
            {{-- card 3 end --}}
        </div>
        {{-- Pet Cards Row 2 End --}}

        {{-- Pet Cards Row 3 Start --}}
        <div class="row d-flex justify-content-center mb-5">
            {{-- card 1 start --}}
            <div class="col-md-6 col-lg-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-7.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Buddy</h3>
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
                        A loyal dog with a flower in his mouth is not just a cute <br> moment, it's a beautiful reminder that love, loyalty, and <br> kindness still exist in the world.
                    </p>

                    <!-- Button -->
                    <a href="{{ route('pet.detail') }}" class="learn-btn">Learn more</a>

                </div>
            </div>
            </div>
            {{-- card 1 end --}}

            {{-- card 2 start --}}
            <div class="col-md-6 col-lg-4">
                <div class="pet-card">
                <!-- Image -->
                <div class="card-img">
                    <img src="{{ asset('images/pet-8.jpg') }}" alt="Pet">
                </div>
                <!-- Content -->
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="pet-name">Simba</h3>
                        <span class="pet-age">2 Years</span>
                    </div>

                    <p class="pet-breed">Rottweiler</p>

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
            {{-- card 2 end --}}
            </div>
            {{-- card 3 end --}}
        </div>
        {{-- Pet Cards Row 3 End --}}
    </div>
</section>

@endsection 