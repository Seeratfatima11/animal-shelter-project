<nav class="navbar navbar-expand-lg this-navbar">
  <div class="container-fluid">
   <a class="navbar-brand nav-logo" href="/">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
   </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end me-5 main-links" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item that-items">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
    Home
</a>
        </li>
        <li class="nav-item that-items">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item that-items">
          <a class="nav-link" href="{{ route('donation') }}">Donation</a>
        </li>
        <li class="nav-item that-items">
          <a href="{{ route('stories') }}" class="nav-link">Success Stories</a>
        </li>
        <li class="nav-item that-items">
          <a class="nav-link" href="#">Pet Care Content</a>
        </li>
        <li class="nav-item that-items">
          <a class="nav-link" href="{{ route('adoption.form') }}">Adopt</a>
        </li>
        <li class="nav-item log-btn">
          <a class="nav-link" href="#">Login/Signup</a>
        </li>
      </ul>
    </div>
  </div>
</nav>