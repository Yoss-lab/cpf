@extends('layouts.apps')
@section('content')
<main id="main" data-aos="fade-up">
<section class="breadcrumbs">
      <div class="container">

                               
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Sujet</th>
                                                        <th>Heure</th>
                                                        
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lives as $live)
                                                    <tr>
                                                        <td>{{$live->numR}}</td>
                                                        
                                                        <td><a href="{{url('detailsLive'.$live->id)}}"> {{$live -> sujet}} </a> </td>
                                                       
                                                        <td>{{$live -> heure}}</td>
                                                        
                                                       
                                                        
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