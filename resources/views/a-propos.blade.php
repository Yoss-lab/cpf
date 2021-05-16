@extends('layouts.app')
@section('content')

<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
<!--           <h2>Inner Page</h2>-->          
         <ol>
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li>A propos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <!-- à propos notre centre CPF -->
      @include('includes.a-proposCPF')

      <!-- about centre CPF -->
      @include('includes.about')
      <!-- Statistique CPF -->
      @include('includes.static')


      <!-- Client CPF -->
      @include('includes.client')



      <!-- Gallerie CPF -->
      @include('includes.gallerie')

    </div>
    </section>

  </main><!-- End #main -->
   
@endsection