@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-left : 190px">
  <div class="row mg-t-80">
    <div class="col-xl-10">
    
      <div class="form-layout form-layout-4">
        <h6 class="br-section-label">Formulaire Reservation</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  method="post" action="{{ url('/addReservation') }}">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Phone: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
              </div>
            </div><!-- row -->
            <!--<div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
            </div>--><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Agence: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <select class="form-control select2" name="agence" data-placeholder="Donnez la structure">
                  <option label="Donnez l'agence"></option>
                  <option value="USA">United States of America</option>
                  <option value="UK">United Kingdom</option>
                </select>
              </div>
            </div><!-- col-4 -->
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