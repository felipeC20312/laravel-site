<header id="header" class="header position-fixed w-100">
  <nav class="navbar navbar-expand-lg bg-white px-3 px-lg-5">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/lalasia-logo.svg') }}" alt="logo" height="40" loading="lazy">
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <img src="{{ asset('icons/menu-icon.svg') }}" alt="menu-icon" loading="lazy">
    </button>

    <div class="collapse navbar-collapse justify-content-between align-items-center"
      id="navbarContent">

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4 text-center">
        <li class="nav-item">
          <a class="nav-link" href="#third-section">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#first-section">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sixth-section">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fourth-section">About Us</a>
        </li>
      </ul>

      <div class="d-flex gap-3 align-items-center justify-content-center">
        <button class="btn btn-link p-0">
          <img src="{{ asset('icons/bag.svg') }}" alt="bag" loading="lazy">
        </button>
        <button class="btn btn-link p-0">
          <img src="{{ asset('icons/user.svg') }}" alt="user" loading="lazy">
        </button>
      </div>
    </div>
  </nav>
</header>
