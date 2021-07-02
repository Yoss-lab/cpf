@extends('layouts.apps')


  @section('content')

  <main id="main" data-aos="fade-up">

     <!-- ======= Breadcrumbs Section ======= -->
     <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Acceuil</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/formation/1621502004.jpg" alt="">
                </div>

               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informatique bureautique</h3>
              <ul>
                <li><strong>Categorie</strong>: Informatique</li>
                <li><strong>Fomation</strong>: Informatique bureautique</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li> <a href="{{url('/inscription')}}"><strong>Inscrivez-vous</strong></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2></h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <!-- Module formation BTS -->
  


    <!-- s'inscrire -->
    @include('includes.subscribe') 
    </div>
    </section>

</main><!-- End #main -->
  @endsection