@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-left : 190px">
  <div class="row mg-t-80">
    <div class="col-xl-12">
    
      <div class="form-layout form-layout-4">
        <h6 class="br-section-label">Recherche</h6>
        <p class="br-section-text">Faire une recherche sur une agence pour voir le nombre de clients qui sont en attente.</p>
        <form  method="post" action="{{ url('/addReservation') }}">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="row mg-t-10">
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Structure: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-10 select2" name="structure" data-placeholder="Donnez la structure">
                  <option label="Donnez la structure"></option>
                  <option value="USA">United States of Americ</option>
                  <option value="UK">United Kingdom</option>
                </select>
              </div>
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Région: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-10 select2" name="region" data-placeholder="Donnez la structure">
                  <option label="Donnez la région"></option>
                  <option value="USA">United States of Americ</option>
                  <option value="UK">United Kingdom</option>
                </select>
              </div>
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Ville: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-10 select2" name="ville" data-placeholder="Donnez la structure">
                  <option label="Donnez la ville"></option>
                  <option value="USA">United States of America</option>
                  <option value="UK">United Kingdom</option>
                </select>
              </div>
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Agence: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-10 select2" name="agence" data-placeholder="Donnez la structure">
                  <option label="Donnez l'agence"></option>
                  <option value="USA">United States of America</option>
                  <option value="UK">United Kingdom</option>
                </select>
              </div>
            </div><!-- col-4 -->
            <div class="form-layout-footer mg-t-30">
              <button class="btn btn-info" type="submit">Recherche</button>
              <button class="btn btn-secondary" type="reset">Annuler </button>
            </div><!-- form-layout-footer -->
      </form>
      </div><!-- form-layout -->
    </div><!-- col-6 -->
   
  </div><!-- row -->
  </div>
</div>
</center>
@endsection