<div>
    <form method="post" action="{{ url('/addStructure') }}" >
    
    <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="form-group">
          <label for="logo"></label>
          <input type="text" name="logo" id="logo" class="form-control" placeholder="Logo">
          
        </div>
        <div class="form-group">
          <label for="nom"></label>
          <input type="text" name="nom" id="nom" class="form-control" placeholder="Name">
        </div>
        <div class="formgroup">
            <input class="btn btn-success" type="submit" value="Valider">
        </div>
    </form>
</div>