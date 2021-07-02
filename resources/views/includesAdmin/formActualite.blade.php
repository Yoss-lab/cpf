

 <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"><h3>Ajout Actualité</h3></div>
              <div class="card-body">
                 <form class="forms-sample" form method="POST" action="{{url('addAct')}}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Titre</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="titre">
                      @error('titre')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                       <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                        @error('description')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
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
                        @error('image')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                      </div>

                   

                    <button type="submit" class="btn btn-primary mr-2">Valider</button>
                    <button type="reset" class="btn btn-light">Annuler</button>
                  </form>
              </div>
     </div>
   </div>
 </div>