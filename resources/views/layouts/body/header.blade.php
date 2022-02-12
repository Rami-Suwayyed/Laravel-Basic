<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#"><span>Com</span>pany</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/')}}">Home</a></li>

          <li class="drop-down"><a href="{{ url('/')}}">About</a>
          </li>

          <li><a href="#">Services</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://twitter.com/rami_suwayyed" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/Rmai.Suwayyed" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/rami_suwayyed/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/in/rami-suwayyed" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
