<div>
    <form method="post" action="{{ url('/create') }}" >
    
    <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="form-group">
          <label for="date"></label>
          <input type="text" name="date" id="date" class="form-control" placeholder="Date">
          
        </div>
        <div class="form-group">
          <label for="phone"></label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="numero"></label>
          <input type="text" name="numero" id="numero" class="form-control" placeholder="Numero">
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