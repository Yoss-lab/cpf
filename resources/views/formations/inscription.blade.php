<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <div>
<form method="post" action="{{url('inscri')}}" class="container">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">NOM</label>
      <input type="TEXT" class="form-control" name="nom" value="{{ Auth::user()->name }}">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">PRENOM</label>
      <input type="TEXT" class="form-control" name="prenom" value="{{ Auth::user()->prenom }}">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">CIN</label>
      <input type="text" class="form-control" name="cin">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Tel</label>
      <input type="TEXT" class="form-control" name="tel" value="{{ Auth::user()->tel1 }}">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="{{ Auth::user()->email }}">
    </div>
    
  </div>
 
 
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Formation</label>
      <select id="inputState" class="form-control" name="formation">
        <option selected>Choisir...</option>
        @foreach($data as $formation)
        <option>{{$formation -> nomFormation}}</option>
        @endforeach
      </select>
    </div>
    
  </div>
  <div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
</div>