@extends('layouts.admin')
  @section('content')
  
  <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><h3>Modifier admin</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample" method="post" action="{{url('/addAdmin')}}">
                                        @csrf
                                            <div class="form-group">
                                                <label for="exampleInputName1">Nom</label>
                                                <input type="text" class="form-control form-control-primary" id="exampleInputName1" placeholder="Name" name="name" value="{{$admin->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Prenom</label>
                                                <input type="text" class="form-control form-control-primary" id="exampleInputName1" placeholder="Prenom" name="prenom" value="{{$admin->prenom}}">
                                            </div>
                                            
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Genre</label>
                                                        <select class="form-control form-control-primary" id="exampleSelectGender" name="genre" value="{{$admin->genre}}">
                                                            <option>Homme</option>
                                                            <option>Femme</option>
                                                        </select>
                                                    </div>
                                            
                                           
                                                    <div class="form-group">
                                                <label>File upload</label>
                                                <input type="file" name="img[]" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label for="exampleSelectGender">Date naissance</label>
                                                <input class="form-control" type="date" name="dat_naiss" value="{{$admin->dat_naiss}}" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">CIN</label>
                                                <input type="text" class="form-control form-control-primary" id="exampleInputName1" placeholder="Name" name="cin" value="{{$admin->cin}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Tel</label>
                                                <input type="text" class="form-control form-control-primary" id="exampleInputName1" placeholder="Name" name="tel" value="{{$admin->tel}}">
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Email</label>
                                                        <input type="email" class="form-control form-control-primary" id="exampleInputEmail3" placeholder="Email" name="email" value="{{$admin->email}}">
                                                    </div>
                                                </div>
                                                
                                            </div>


                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend ">
                                                    <div class="input-group-text">@</div>
                                                </div>
                                                <input type="text" class="form-control form-control-primary" id="inlineFormInputGroupUsername2" name="user_name" placeholder="Username" value="{{$admin->user_name}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Password</label>
                                                <input type="password" class="form-control form-control-primary" id="exampleInputPassword4" name="password" placeholder="Password" value="{{$admin->password}}">
                                            </div>
                                            
                                           
                                            
                                            <button type="submit" class="btn btn-primary mr-2">Valider</button>
                                            <button class="btn btn-light">Annuller</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


  @endsection