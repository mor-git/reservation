@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-left : 150px">
  <div class="row mg-t-50">
    <div class="col-xl-10">
    
      <div class=" ">
        <h6 class="br-section-label">Formulaire Structure</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  method="post" action="{{ url('/addAgent') }}">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Last Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="last" class="form-control" placeholder="Last Name">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Phone: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Login: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="login" class="form-control" placeholder="Login">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Password: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="password" name="pwd" class="form-control" placeholder="Password">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Agence: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="agence" class="form-control" placeholder="Agence">
              </div>
            </div>
            <div class="form-layout-footer mg-t-30">
              <button class="btn btn-info" type="submit">Valider</button>
              <button class="btn btn-secondary" type="reset">Annuler</button>
            </div><!-- form-layout-footer -->
      </form>
      </div><!-- form-layout -->
    </div><!-- col-6 -->
   
  </div><!-- row -->
  </div>
</div>
</center>
@endsection