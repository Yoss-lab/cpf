<div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"><h3>Ajouter Cours</h3></div>
              <div class="card-body">
                 <form class="forms-sample" form method="POST" action="{{url('ajoutCours')}}" enctype="multipart/form-data">
                   @csrf
                   
                   <div class="form-group">
                      <label for="exampleInputName1">Cours</label>
                      <input type="text" class="form-control" name="nom" id="exampleInputName1" placeholder="nom cour" >
                    </div>

                    
                   <div class="form-group">
                        <label>PDF</label>
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