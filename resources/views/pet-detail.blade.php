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
            <div class="col-md-12 col-lg-6 ">
                <div class="pet-info-card">

                    <h3>Mex</h3>
                    <p>Mixed Breed</p>

                    <!-- INFO GRID -->
                    <div class="row mb-3">

                <div class="row">

                    <!-- Age -->
                    <div class="col-6 mb-5">
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
                    <div class="col-6 mb-4">
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
                    <div class="col-6 mb-4">
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

                    <!-- ABOUT -->
                    <h6 class="dog-title">About Max</h6>
                    <p class="dog-detail">
                        Max is a friendly and energetic dog who loves to play fetch and go for walks.
                        He’s well-trained and gets along great with people of all ages.
                    </p>

                    <!-- TAGS -->
                    <div class="personality-section mt-4">

                        <h5>Personality</h5>

                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <span class="tag-item">Friendly</span>
                            <span class="tag-item">Energetic</span>
                            <span class="tag-item">Playful</span>
                        </div>

                    </div>

                    <!-- GOOD WITH -->
                   <div class="good-with-section mt-4">

                    <h5>Good With</h5>

                    <ul class="list-unstyled good-list mb-0">

                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-heart-fill good-icon"></i>
                            <span>Children</span>
                        </li>

                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-heart-fill good-icon"></i>
                            <span>Other Dogs</span>
                        </li>

                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-heart-fill good-icon"></i>
                            <span>Families</span>
                        </li>

                    </ul>

                </div>

                    <!-- BUTTONS -->
                    <div class="d-grid gap-2">
                        <a href="#" class="adopt-btn">Apply to Adopt Mex</a>
                        <a href="#" class="ques-btn">Ask a Question</a>
                    </div>

                </div>
            </div>

        </div>


    </div>
</section>
<section class="more-pets py-5">
    <div class="container-fluid px-5">

        <h4>More Pets to Love</h4>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="pet-mini-card">
                    <img src="{{ asset('images/pet-5.jpg') }}" alt="pet">
                    <div class="pet-mini-body">
                        <h6>Rocky</h6>
                        <small>Chihuahua</small>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="pet-mini-card">
                    <img src="{{ asset('images/pet-4.jpg') }}" alt="pet">
                    <div class="pet-mini-body">
                        <h6>Charlie</h6>
                        <small>Golden Retriever</small>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="pet-mini-card">
                    <img src="{{ asset('images/pet-7.jpg') }}" alt="pet">
                    <div class="pet-mini-body">
                        <h6>Buddy</h6>
                        <small>Brown Tabby</small>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection