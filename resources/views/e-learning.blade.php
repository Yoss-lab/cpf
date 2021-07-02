@extends('layouts.apps')
  @section('content')
  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
<!--           <h2>Inner Page</h2>-->          
         <ol>
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li>e-learning</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
       <!-- s'inscrire -->
  
      </div>
    </section>


    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

       <!--  <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div> -->

        <div class="row">
         

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"> <i class="bi bi-file-earmark-text"></i></div>
              <h4><a href="{{url('support_cours')}}">Supports du cours</a></h4>
              <p</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4><a href="{{url('seanceLive')}}">Séances en ligne</a></h4>
              <p></p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection