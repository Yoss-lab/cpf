@extends('layouts.admin')
  @section('content')

  
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Administrateurs</h5>
                                            <span>- - - - - - - - - - -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Pages</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Layouts</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h3>Administrateurs</h3>
                                       
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Responsable</th>
                                                        <th>Email</th>
                                                        <th>ID</th>
                                                        <th>Date de creation</th>
                                                       
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($admin as $admin)
                                                    <tr>
                                                        <td>
                                                            <div class="d-inline-block align-middle">
                                                                <img src="" alt="admin image" class="rounded-circle img-40 align-top mr-15">
                                                                <div class="d-inline-block">
                                                                    <h6>{{ $admin-> name}}</h6>
                                                                    <p class="text-muted mb-0">Directeur</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $admin-> email}}</td>
                                                        <td>{{ $admin-> id}}</td>
                                                        <td>{{ $admin-> created_at}}</td>
                                                        
                                                        <td><a href="{{url('editAdmin', $admin -> id)}}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a><a href="{{url('deleteAdmin', $admin -> id)}}"><i class="ik ik-trash-2 f-16 text-red"></i></a></td>
                                                    </tr>
                                                 @endforeach   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection                            