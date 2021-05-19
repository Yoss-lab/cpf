@extends('layouts.admin')
  @section('content')
  
  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
<!--           <h2>Inner Page</h2>-->          
         <ol>
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li>Ajout Formation</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
       <!-- s'inscrire -->
     @include('includesAdmin.formCreate') 
      </div>
    </section>

  </main><!-- End #main -->
@endsection