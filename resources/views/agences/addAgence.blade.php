<!--<div>
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
        <input type="text" value="" name="pwd" id="pwd" class="form-control" readonly>
    </form>
</div>-->
@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-top : 190px"></div>
  <div class="row mg-t-80">
    <div class="col-xl-6">
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Left Label Alignment</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <div class="row">
          <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="nom" class="form-control" placeholder="Name">
          </div>
        </div><!-- row -->
        <div class="row mg-t-20">
          <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" placeholder="Enter lastname">
          </div>
        </div>
        <div class="row mg-t-20">
          <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" placeholder="Enter email address">
          </div>
        </div>
        <div class="row mg-t-20">
          <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
          </div>
        </div>
        <div class="form-layout-footer mg-t-30">
          <button class="btn btn-info">Submit Form</button>
          <button class="btn btn-secondary">Cancel</button>
        </div><!-- form-layout-footer -->
      </div><!-- form-layout -->
    </div><!-- col-6 -->
   
  </div><!-- row -->
  
</di>
</center>
@endsection