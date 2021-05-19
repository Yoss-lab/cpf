<form class="row g-3" form method="POST" action="{{url('ajoutFormation')}}" enctype="multipart/form-data">
@csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Formation</label>
    <input type="text" class="form-control" id="inputFormation" name="nomFormation">
  </div>


  <div class="col-md-4">
    <label for="inputState" class="form-label">Type</label>
    <select id="inputType" class="form-select" name="type">
      <option value="" selected>Choose...</option>
      <option value="BTS">BTS</option>
      <option value="BTP">BTP</option>
      <option value="accelere">Accélére</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descFormation"></textarea>
 </div>

 <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="image">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
  
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
</form>