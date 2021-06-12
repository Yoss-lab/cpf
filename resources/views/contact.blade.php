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
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
       <!-- s'inscrire -->
     @include('includes.subscribe') 
      </div>
    </section>

  </main><!-- End #main -->
@endsection