@extends('layouts.admin')
  @section('content')
  
  <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-box bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Gallerie</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>

                                       
                                    
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/acceuiladmin') }}"><i class="ik ik-home"></i></a>
                                            </li>
                                            
                                            <li class="breadcrumb-item active" aria-current="page">Gallerie</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-secondary" href="{{url('/addGallerie')}}"><i class="ik ik-clipboard"></i>Ajouter photo </a>

                      
     <!-- @include('includesAdmin.add')  -->
     <div class="col-xl-8 col-md-6">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h3>Gallerie</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Matricule</th>  
                                                        <th>Image</th>
                                                        <th>Titre</th>
                                                        <th>Sous Titre</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($gallerie as $gal)
                                                    <tr>
                                                        <td>{{$gal -> id}}</td>      
                                                        <td><img src="{{asset('assets/img/gallerie/'.$gal->image)}}" alt="" class="img-fluid img-20"></td>
                                                        <td>{{$gal -> titre}}</td> 
                                                        <td>{{$gal -> sousTitre}}</td>   

                                                        <td>
                                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                                            <a href="{{url('deleteGallerie', $gal -> id)}}"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach 
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

  
@endsection