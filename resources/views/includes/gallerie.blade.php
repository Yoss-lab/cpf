 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallerie</h2>
          <!-- <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        @foreach($gallerie as $gal)

          
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('assets/img/gallerie/'.$gal->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$gal -> titre}}</h4>
              <p>{{$gal -> sousTitre}}</p>
              <a href="{{asset('assets/img/gallerie/'.$gal->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$gal -> titre}}"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach


          

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->