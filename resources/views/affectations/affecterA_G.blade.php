@extends('layouts.layout')

@section('contenu')
<center>
<style>
      #partieAjax{
        background-color : white;
        font : bold;
        color : black;
      }
    </style>
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Forms</a>
      <span class="breadcrumb-item active">Form Wizards</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="br-pagetitle">
    <div>
      <h4>Form Wizards</h4>
    </div>
  </div><!-- d-flex -->

  <div class="container">
  <div style="margin-left : 100px">
    <div class="row mg-t-10">
      <div class="col-xl-8">
      
        <div class="form-layout form-layout-4 ">
          <h6 class="br-section-label">Formulaire Affectation</h6>
          <p class="br-section-text">A basic form where labels are aligned in left.</p>
          <form method="POST" action="{{ url('/affecter') }}" id ="formcom">
              <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
              <div class="row">
                  <label class="col-sm-2 form-control-label">Agent: &nbsp;<span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select class="form-control select2" name="agent">
                      <option label="Choix de l'agent"><option>
                      @foreach($agents as $agent)
                      <option value="{{ $agent->id}}">{{ $agent->name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div><!-- col-4 -->
              <div class="row mg-t-10">
                  <label class="col-sm-2 form-control-label">Guichet: &nbsp;<span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select class="form-control select2" name="guichet">
                      <option label="Choix du Guichet"><option>
                      @foreach($guichets as $one)
                      <option value="{{ $one->id}}">{{ $one->name}}</option>
                      @endforeach
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
      </div>
    </div><!-- row -->
  </div>
  </div>
</div>
</center>
<script>
</script>
@endsection