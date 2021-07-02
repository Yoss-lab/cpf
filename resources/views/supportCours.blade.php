@extends('layouts.apps')
@section('content')
<main id="main" data-aos="fade-up">
<section class="breadcrumbs">
      <div class="container">

                               
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                       <!--  <th>Réf</th> -->
                                                        <th>Cours</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>en ligne</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cour as $cour)
                                                    <tr>
                                                        <!-- <td>{{$cour -> id}}</td> -->
                                                        <td>{{$cour -> nom}}</td>
                                                       
                                                        <td> <a href="voirCour/{{$cour->id}}"> voir</a>  </td>
                                                        <td>  <a href="telechargeCours/{{$cour->pdf}}"> telécharger </a>   </td>
                                                        <td>{{$cour -> created_at}}</td>
                                                        
                                                    </tr>
                                                    @endforeach 
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                
                                </div>
    </section>         
                                </main><!-- End #main -->
   

@endsection