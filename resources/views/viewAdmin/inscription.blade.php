@extends('layouts.admin')
  @section('content')


  <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Inscriptions</h3></div>
                                    <div class="card-body">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>CIN</th>
                                                    <!-- <th class="nosort">Avatar</th> -->
                                                    <th>Nom</th>
                                                    <th>Email</th>
                                                    <th>Tel</th>
                                                    <th>Formation</th>
                                                    <th>Date</th>
                                                    <th class="nosort">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($inscris as $inscri)
                                                <tr>
                                                    <td>{{$inscri -> id}}</td>
                                                    <td>{{$inscri -> cin}}</td>
                                                    <!-- <td><img src="../img/users/1.jpg" class="table-user-thumb" alt=""></td> -->
                                                    <td>{{$inscri -> nom}} {{$inscri -> prenom}}</td>
                                                    <td>{{$inscri -> email}}</td>
                                                    <td>{{$inscri -> tel}}</td>
                                                    <td>{{$inscri -> formation}}</td>
                                                    <td>{{$inscri -> created_at}}</td>
                                                    <td>
                                                        <div class="table-actions">
                                                            <a href="#"><i class="ik ik-eye"></i></a>
                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                        </div>
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