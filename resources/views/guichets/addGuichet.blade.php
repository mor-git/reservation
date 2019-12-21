<div>
    <form method="post" action="{{ url('/addGuichet') }}" >
    
    <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="form-group">
          <label for="nom"></label>
          <input type="text" name="nom" id="nom" class="form-control" placeholder="Name">
          
        </div>
        <div class="form-group">
          <label for="agence"></label>
          <input type="text" name="agence" id="agence" class="form-control" placeholder="Agence">
        </div>
        <div class="formgroup">
            <input class="btn btn-success" type="submit" value="Valider">
        </div>
    </form>
</div>