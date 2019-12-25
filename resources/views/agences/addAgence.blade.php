@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-left : 190px">
  <div class="row mg-t-80">
    <div class="col-xl-10">
    <form method="post" action="{{ url('/addAgence') }}" >
      <div class="form-layout form-layout-4">
        <h6 class="">Formulaire Agence</h6>
        
        <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="row">
          <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
        </div><!-- row -->
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Région: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="region" placeholder="Région">
          </div>
        </div>
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Ville: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="ville" placeholder="Ville">
          </div>
        </div>
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Latitude: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="latitude" placeholder="Latitude">
          </div>
        </div>
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Longitude: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="longitude" class="form-control" placeholder="Longitude">
          </div>
        </div>
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Phone: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="phone" placeholder="Phone">
          </div>
        </div>
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Login: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="login" placeholder="Login"></textarea>
          </div>
        </div>
        <div class="row mg-t-10">
          <label class="col-sm-2 form-control-label">Password: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
          </div>
        </div>
        <div class="row mg-t-10">
            <label class="col-sm-2 form-control-label">Structure: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select class="form-control select2" data-placeholder="Donnez la structure">
                <option label="Donnez la structure"></option>
                <option value="USA">United States of America</option>
                <option value="UK">United Kingdom</option>
              </select>
            </div>
        </div><!-- col-4 -->
        <div class="form-layout-footer mg-t-30">
          <button class="btn btn-info" type="submit">Valider</button>
          <button class="btn btn-secondary" type="reset">Annuler</button>
        </div><!-- form-layout-footer -->
      </div><!-- form-layout -->
    </form>
    </div><!-- col-6 -->
    </div>
  </div><!-- row -->
  
</di>
</center>
@endsection