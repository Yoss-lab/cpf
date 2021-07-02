@extends('layouts.apps')
@section('content')
<main id="main" data-aos="fade-up">
<section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div >
                  <img src="{{asset('assets/img/seances/'.$live->image)}}" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Séance en ligne</h3>
              <ul>
                <li><strong>Cours</strong>: {{$live -> sujet}}</li>
                <li><strong>Date</strong>: {{$live -> heure}} </li>
                
                <li><strong>Lien </strong>: <a href="{{$live -> lien}}" style="color:blue">{{$live -> lien}}</a></li>
                <li><strong>ID de réunion </strong>:{{$live -> numR}}</li>
                <li><strong>Code secret</strong>: {{$live -> codeSecret}}</li>
              </ul>


           

            </div>
            <div class="portfolio-description">
              <h2></h2>
              <p>
              
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->     
</main><!-- End #main -->
   

@endsection