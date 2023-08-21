  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('styles/assets/img/logo.png')}}" alt="">
        <span>Tidjaniya</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('index') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">Our Schollars</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">Members</a></li>
          <li><a href="blog.php">News</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('history-tidjaniya') }}">Tidjaniya</a></li>
              <li class="dropdown"><a href="#"><span>Sidi Ahmed Tidjani</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('history') }}">Summary Of His Life</a></li>
                  <li><a href="{{ route('lineage') }}">His Lineage</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="{{ route('faydha') }}">Faydha</a></li>
              <li><a href="#">Condition List</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
