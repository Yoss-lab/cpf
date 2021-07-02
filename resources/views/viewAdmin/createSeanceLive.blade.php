@extends('layouts.admin')
  @section('content')
  
  
  <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"><h3>Séance en ligne</h3></div>
              <div class="card-body">
                 <form class="forms-sample" form method="POST" action="{{url('ajoutSeance')}}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Sujet</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="sujet">
                    </div>

                    <div class="form-group">
                       <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Heure</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="heure">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Lien</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="lien">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">ID de réunion</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="numR">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Code secret</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="codeSecret">
                    </div>

                   

                   
                    
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Support du cour</label>
                        <input type="file" name="pdf" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload PDF">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                      </div>

                   
       
                    <button type="submit" class="btn btn-primary mr-2">Valider</button>
                    <button type="reset" class="btn btn-light">Annuler</button>
                  </form>
              </div>
     </div>
   </div>
 </div>
    
@endsection