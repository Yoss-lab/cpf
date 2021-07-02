
  <div class="portfolio-details-slider swiper-container">
     <div class="swiper-wrapper align-items-center">
        @foreach($covers as $cover)
            <div class="swiper-slide">
              <img src="{{asset('assets/img/cover/'.$cover->image)}}" class="d-block w-100" alt="">
            </div>
        @endforeach
        </div>
              <div class="swiper-pagination"></div>
            </div>
      </div>
  </div>
