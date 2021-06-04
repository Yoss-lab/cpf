 <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">
        @foreach($references as $reference)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/clients/'.$reference->image)}}" class="img-fluid" alt="">
          </div>
          @endforeach
          

         
        </div>

      </div>
    </section><!-- End Clients Section -->