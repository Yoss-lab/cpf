<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ url('/') }}" class="logo"><img src="assets/img/logo.png" alt="logo CPF"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/a-propos') }}">À propos</a></li>

          <li class="dropdown"><a href="#"><span>Formations Initiale</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              
              <li class="dropdown"><a href="#"><span>BTS</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('/BTS') }}">Animation jardin d'enfant</a></li>
                  <li><a href="#">Assistant(e) de direction</a></li>
                  <li><a href="#">Comtable d'entreprise</a></li>
                  <li><a href="#">Educateur de la prime et de la petite enfance</a></li>
                  
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>BTP</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Animation jardin d'enfant</a></li>
                  <li><a href="#">Assistant(e) de direction</a></li>
                  <li><a href="#">Comtable d'entreprise</a></li>
                  <li><a href="#">Educateur de la prime et de la petite enfance</a></li>
                  
                </ul>
              </li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Formations Continu</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Diplomante</a></li>
              <li><a href="#">Accélérée</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">E-learning</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->