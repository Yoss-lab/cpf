@extends('layouts.apps')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  @section('content')
  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
           <h2>BTS Animation jardin d'enfant</h2>          
         <ol>
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li>BTS Animation jardin d'enfant</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <!-- description formation BTS -->
      @include('includes.descFormation')

      <!-- Module formation BTS -->
      @include('includes.moduleFormation')


      <!-- s'inscrire -->
      @include('includes.subscribe') 
      </div>
    </section>

  </main><!-- End #main -->
@endsection