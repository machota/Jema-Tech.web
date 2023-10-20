 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <a href="{{ route('home') }}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <!--<h1 class="logo me-auto"><a href="index.html">JEMATECH</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="" href="{{ route('home') }}"><b>Home</b></a></li>
          <li><a href="{{ route('about') }}"><b>About</b></a></li>
          <li><a href="{{ route('service') }}"><b>Services</b></a></li>
          <li><a href="{{ route('product') }}"><b>Products</b></a></li>
          <li><a href="{{ route('ourteam') }}"><b>Our Team</b></a></li>
          </li>
          <li><a href="{{ route('contact') }}"><b>Contacts</b></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->