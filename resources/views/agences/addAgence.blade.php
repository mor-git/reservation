<div>
    <form method="post" action="{{ url('/addAgence') }}" >
    
    <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="form-group">
          <label for="name"></label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="region"></label>
          <input type="text" name="region" id="region" class="form-control" placeholder="Region">
        </div>
        <div class="form-group">
          <label for="ville"></label>
          <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville">
        </div>
        <div class="form-group">
          <label for="latitude"></label>
          <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude">
        </div>
        <div class="form-group">
          <label for="longitude"></label>
          <input type="text" name="longitude" id="longitude" class="form-control" placeholder="longitude">
        </div>
        <div class="form-group">
          <label for="phone"></label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="phone">
        </div>
        <div class="form-group">
          <label for="login"></label>
          <input type="text" name="login" id="login" class="form-control" placeholder="login">
        </div>
        <div class="form-group">
          <label for="pwd"></label>
          <input type="text" name="pwd" id="pwd" class="form-control" placeholder="pwd">
        </div>
        <div class="formgroup">
            <input class="btn btn-success" type="submit" value="Valider" name="btn">
        </div>
        
    </form>
    <form action="{{ url('/compteur') }}" method="post">
        <div class="formgroup">
            <input class="btn btn-success" type="submit" value="Valider" name="btn">
        </div>
        <input type="text" value="{{ $teur }}" name="pwd" id="pwd" class="form-control" readonly>
    </form>
</div>