@extends('layouts.layout')

@section('contenu') 
<center>
<div class="container">
<div style="margin-left : 150px">
  <div class="row mg-t-100">
    <div class="col-xl-8">
    
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Edite Structure</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  method="post" action="{{ url('/updateStructure', $le_structure->id) }}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="row">
          <label class="col-sm-2 form-control-label">Logo: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="logo" class="form-control" value="{{ $le_structure->logo }}">
          </div>
        </div><!-- row --> 
        <div class="row mg-t-20">
          <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="nom" class="form-control" value="{{ $le_structure->name }}">
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