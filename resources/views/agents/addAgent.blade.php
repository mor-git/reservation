<div>
    <form method="post" action="{{ url('/addAgent') }}" >
    
    <input type="hidden" value="{{csrf_token()}}"  name="_token" />
        <div class="form-group">
          <label for="name"></label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="last"></label>
          <input type="text" name="last" id="last" class="form-control" placeholder="LastName">
        </div>
        <div class="form-group">
          <label for="phone"></label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="login"></label>
          <input type="text" name="login" id="login" class="form-control" placeholder="Login">
        </div>
        <div class="form-group">
          <label for="pwd"></label>
          <input type="text" name="pwd" id="pwd" class="form-control" placeholder="Password">
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