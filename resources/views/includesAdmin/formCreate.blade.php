<div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"><h3>Ajout Formation</h3></div>
              <div class="card-body">
                 <form class="forms-sample" form method="POST" action="{{url('ajoutFormation')}}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Formation</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nom">
                      @error('nom')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Prix</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Prix" name="prix">
                      @error('prix')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                           <label >Type</label>
                          <select id="inputType" class="form-control" name="type">
                            <option value="" selected>Choisir...</option>
                            <option value="1">BTS</option>
                            <option value="2">BTP</option>
                            <option value="3">Accélére</option>
                          </select>
                       @error('type')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                           <label >Ctégorie</label>
                          <select id="inputType" class="form-control" name="categorie">
                            <option value="" selected>Choisir...</option>
                            <option value="Design">Design</option>
                            <option value="progrmmation">Programmation</option>
                            <option value="developpement web">Developpement web</option>
                            <option value="developpement mobile">Developpement mobile</option>
                            <option value="informatique">Informatique </option>
                            <option value="langues">Langues</option>
                          </select>

                      @error('categorie')
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
                       <label for="exampleTextarea1">Module 1</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="module1"></textarea>
                        @error('module1')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                       <label for="exampleTextarea1">Module 2</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="module2"></textarea>
                        @error('module2')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                       <label for="exampleTextarea1">Module 3</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="module3"></textarea>
                        @error('module3')
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