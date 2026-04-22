@extends('layouts.app')

@section('content')
<section class="adopt-section">
    <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-md-12">
            <h1 class="this-title mb-4">Success Stories</h1>
            <p class="sub-head mb-0">Heartwarming tales of adopted pets and their loving families</p>
        </div>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="stats-section py-4">
    <div class="container-fluid px-5">
<div class="stats-box text-center">
    <div class="row g-3">
        <div class="col-12 col-sm-4">
            <h5>500+</h5>
            <p>Happy Adoptions This Year</p>
        </div>

        <div class="col-12 col-sm-4">
            <h5>98%</h5>
            <p>Successful Match Rate</p>
        </div>

        <div class="col-12 col-sm-4">
            <h5>1,200+</h5>
            <p>Lives Changed Forever</p>
        </div>

    </div>
</div>
    </div>
</section>

<!-- STORIES -->
<section class="stories py-5">
<div class="container-fuid px-5">

<!-- STORY 1 -->
<div class="story-item mb-4">

    <div class="story-card-wrapper">
        <div class="row g-0">

            <!-- IMAGE -->
            <div class="col-lg-6">
                <img src="{{ asset('images/pet-1.jpg') }}" class="story-img">
            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">
                <div class="story-content">
                    <h4>Max’s Story</h4>
                    <span class="meta">Adopted by The Johnson Family  • January 2026</span>
                    <p>
                       When we first met Max at Paws & Hearts, we knew he was special. He was a bit shy br at first, but after spending some time with him, we could see his loving personality shine through. Now, three months later, Max is an integral part of our family. He loves playing with our kids in the backyard and has become the best cuddle buddy. We can't imagine life without him!
                    </p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- STORY 2 (reverse) -->
<div class="story-item mb-4">

    <div class="story-card-wrapper">
        <div class="row g-0 flex-lg-row-reverse">

            <div class="col-lg-6">
                <img src="{{ asset('images/pet-6.jpg') }}" class="story-img">
            </div>

            <div class="col-lg-6">
                <div class="story-content">
                    <h4>Luna’s Story</h4>
                    <span class="meta">Adopted by Sarah Mitchell • December 2025</span>
                    <p>
                        As a first-time pet owner, I was nervous about adoption. The staff at Paws & Hearts were incredibly supportive and helped me find Luna, a sweet Siamese who matched my lifestyle perfectly. She's taught me so much about patience and unconditional love. Luna greets me at the door every day after work and has made my apartment feel like a true home.
                    </p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- STORY 3 -->
<div class="story-item mb-4">

    <div class="story-card-wrapper">
        <div class="row g-0">

            <div class="col-lg-6">
                <img src="{{ asset('images/pet-5.jpg') }}" class="story-img">
            </div>

            <div class="col-lg-6">
                <div class="story-content">
                    <h4>Rocky Story</h4>
                    <span class="meta">Adopted by Mike and Jennifer Chen  • November 2025</span>
                    <p>
                        Buddy came to us as a young puppy who needed a lot of love and training. We were up for the challenge! Working with the shelter's training resources and attending their puppy classes, Buddy has grown into the most well-behaved and loving dog. He's become our hiking partner and has brought us closer as a couple. The joy he brings us every single day is immeasurable.
                    </p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- STORY 4 (reverse) -->
<div class="story-item mb-4">

    <div class="story-card-wrapper">
        <div class="row g-0 flex-lg-row-reverse">

            <div class="col-lg-6">
                <img src="{{ asset('images/pet-4.jpg') }}" class="story-img">
            </div>

            <div class="col-lg-6">
                <div class="story-content">
                    <h4>Charlie Story</h4>
                    <span class="meta">Adopted by Dorothy Williams•October 2025</span>
                    <p>
                        After my husband passed away, my home felt so empty. A friend suggested I visit Paws & Hearts, and that's where I met Whiskers, a gentle orange tabby. At 72, I wasn't sure about adopting, but the staff assured me Whiskers would be perfect for my quieter lifestyle. They were absolutely right. Whiskers has brought warmth back into my home and gives me purpose every day. He keeps me company and makes me smile.
                    </p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- STORY 5 -->
<div class="story-item mb-4">

    <div class="story-card-wrapper">
        <div class="row g-0">

            <div class="col-lg-6">
                <img src="{{ asset('images/pet-5.jpg') }}" class="story-img">
            </div>

            <div class="col-lg-6">
                <div class="story-content">
                    <h4>Buddy Story</h4>
                    <span class="meta">Adopted by The Rodriguez Family•August 2025</span>
                    <p>
                        Shadow was listed as 'shy and needs patient family,' which described us perfectly. Our two children were eager to adopt, and we wanted to teach them about compassion and patience. Shadow has blossomed in our home over the past six months. She now confidently explores every room and has become a gentle companion to our kids. Watching her transformation has been incredible for our whole family.
                    </p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>

        </div>
    </div>

</div>

</div>
</section>


@endsection