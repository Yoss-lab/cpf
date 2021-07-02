    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('assets/img/formation/'.$formation->image)}}" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Description formation</h3>
              <ul>
                <li><strong>Categorie</strong>: {{$formation->categorie}}</li>
                <li><strong>Formation</strong>: {{$formation->nomFormation}}</li>
                
                <li><strong>Inscrivez-vous</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Formation  <!-- {{$formation->type}} --> en  {{$formation->nomFormation}}</h2>
              <p>
              {{$formation->descFormation}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
