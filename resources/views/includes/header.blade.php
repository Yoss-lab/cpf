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
                @foreach($data as $formation)
                 
                 @if ($formation -> type == 1) 
              
                 <li><a href="{{url('showFormation', $formation -> id)}}">{{$formation -> nomFormation}}</a></li>
                 @endif
                 @endforeach
                  
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>BTP</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                @foreach($data as $formation)
                 
                 @if ($formation -> type == 2) 
              
                 <li><a href="{{url('showFormation', $formation -> id)}}">{{$formation -> nomFormation}}</a></li>
                 @endif
                 @endforeach
                  
                </ul>
              </li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Formations Continu</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li class="dropdown"><a href="#"><span>Accélérée</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                
                
                @foreach($data as $formation)
                 
                  @if ($formation -> type == 3) 
               
                  <li><a href="{{url('showFormation', $formation -> id)}}">{{$formation -> nomFormation}}</a></li>
                  @endif
                  @endforeach
                  
                </ul>
              </li>
              <li><a href="#">Diplomante</a></li>
             
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">E-learning</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>


        
                

            
            

      </nav><!-- .navbar -->
    
    </div>






    
                                
                            @include('includes.auth')
                                

                                
                            
  </header><!-- End Header -->