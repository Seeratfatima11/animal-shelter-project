@extends('layouts.app')

@section('content')

<!-- ABOUT HERO -->
<section class="hero-section about-hero">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h1 class="this-title">About Animal Shelter</h1>
				<p class="sub-head">At our Animal Shelter, every life matters. <br>
					Every day, countless animals are left alone on the streets— <br>hungry, injured, scared, and waiting for someone to care. <br> Many of them have been abandoned, while others have never <br> known what it feels like to be loved. We exist to change that story. <br>
					Our shelter is more than just a place—it is a home filled with compassion, hope, and second chances. From the moment an animal enters our care, they are treated with kindness, patience, and respect. We believe that every animal deserves not only to survive but to live a life full of love and dignity.</p>
			</div>
			<div class="col-md-6 hero-image">
				<img src="{{ asset('images/hero-img.jpg') }}" alt="About Hero" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-- MISSION & VALUES -->
<section class="mission-section py-5">
	<div class="container">
		<div class="row text-center mb-4">
			<div class="col-md-12">
				<h2>Our Mission</h2>
				<p class="pet-subhead">Our mission is to rescue animals from dangerous and life-threatening situations, provide them with proper medical care, and help them find safe, loving homes.</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-md-4 text-center">
				<div class="value-card p-4 h-100">
					<h4>Rescue</h4>
					<p>We respond to calls and actively search for animals in distress—whether they are injured, abandoned, or at risk. Each rescue is a race against time, and every life saved is a victory.</p>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="value-card p-4 h-100">
					<h4>Care & Rehabilitation</h4>
					<p>Many animals arrive at our shelter in critical condition. We provide medical treatment, nourishment, and emotional care to help them heal. Watching a frightened animal slowly learn to trust again is one of the most rewarding parts of our work.</p>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="value-card p-4 h-100">
					<h4>Adoption</h4>
					<p>Our ultimate goal is to find loving, permanent homes for every animal. We carefully match pets with families to ensure a lifetime of happiness and care.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- IMPACT STATS -->
<section class="stats-section py-4 mb-5">
	<div class="container">
		<div class="row text-center">
			<div class="col-6 col-md-3">
				<h3 class="mb-0">1,200+</h3>
				<p class="mb-0">Pets Rehomed</p>
			</div>
			<div class="col-6 col-md-3">
				<h3 class="mb-0">3,400+</h3>
				<p class="mb-0">Volunteer Hours</p>
			</div>
			<div class="col-6 col-md-3">
				<h3 class="mb-0">250+</h3>
				<p class="mb-0">Foster Homes</p>
			</div>
			<div class="col-6 col-md-3">
				<h3 class="mb-0">10+</h3>
				<p class="mb-0">Years Serving</p>
			</div>
		</div>
	</div>
</section>

@endsection

