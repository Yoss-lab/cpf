<div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"><h3>Ajout Photo</h3></div>
              <div class="card-body">
                 <form class="forms-sample" form method="POST" action="{{url('addGallerie')}}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Titre</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Titre" name="titre">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Description" name="sousTitre">
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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