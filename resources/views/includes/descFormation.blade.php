 <!-- ======= About Section ======= -->
 <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
      
        <div class="section-title">
          <!-- <h2>About</h2> -->

          <h3>Description De BTS  <span>{{$formation -> nomFormation}}</span></h3>
<!--           <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
 -->        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/formation/'.$formation->image)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
<!--             <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
 -->            <p class="fst-italic">
                  {{$formation -> descFormation}}
            </p>
                <div class="section-title">
                     <h2>Emplois visés :</h2> 
                </div>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <!-- <h5>Animateur de jardin d’enfantst</h5> -->
                  <p>Animateur de jardin d’enfants</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <p>Assistant préscolaire</p>
                <div>
                  <!-- <h5>Magnam soluta odio exercitationem reprehenderi</h5> -->
                  
                </div>
              </li>
            </ul>
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->