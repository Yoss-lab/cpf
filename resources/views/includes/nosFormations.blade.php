<!-- ======= Team Section ======= -->
<section  class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>COURS POPULAIRE</h2>
          <h3>COURS POPULAIRE <span>COURS POPULAIRE</span></h3>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper" >
                    @foreach($data as $formation)
                      @if ($formation -> type == 3) 
                        <div class="swiper-slide">
                      
                              
                                    <div class="testimonial-wrap">
                                      <div class="member">
                                        <div class="member-img">
                                          <img src="{{asset('assets/img/formation/'.$formation->image)}}" class="img-fluid" alt="">
                                          <div class="social">
                                            <a href=""><i>Click</i></a>
                                          </div>
                                        </div>
                                        <div class="member-info">
                                          <h4>{{$formation -> nomFormation}}</h4>
                                          <span>{{$formation -> descFormation}}</span>
                                          <div class="text-end"><a href="{{url('formation_details'.$formation->id)}}" class="card-link">Voir Plus</a></div>
                                        </div>
                                      </div> 
                                    </div>
                              
                        
                        </div> 
                  @endif
                  @endforeach

                 
         <div class="swiper-pagination"></div>    
      </div>
      
    </div>
  </section><!-- End Team Section -->


  

  
     