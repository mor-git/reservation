@extends('layouts.layout')

@section('contenu')
<center>
  </style>
  <div class="br-mainpanel">
    <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index.html">Bracket</a>
        <a class="breadcrumb-item" href="#">Forms</a>
        <span class="breadcrumb-item active">Form Wizards</span>
      </nav>
    </div><!-- br-pageheader -->
<div class="container">
<div style="margin-left : 70px"> 
  <div class="row mg-t-10">
    <div class="col-xl-8">
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Formulaire Guichet</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <!--{{ url('/addGuichet') }}-->
        <form  method="post" action="{{ url('/addGuichet') }}" id="form">
            <input type="hidden" value="{{csrf_token()}}" name="_token" /> 
            <div class="row">
              <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Name">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Agence: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text"  name="agence"  class="form-control" placeholder="{{ $agence->name }}" readonly>
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Compteur: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text"  name="compteur" value="" placeholder="{{ $agence->guichets }}" class="form-control" readonly>
              </div>
            </div><!-- row -->
            <div class="form-layout-footer mg-t-30">
              <button class="btn btn-info" type="submit">Valider</button>
              <button class="btn btn-secondary">Annuler</button>
            </div><!-- form-layout-footer -->
      </form>
      </div><!-- form-layout -->
    </div><!-- col-6 -->
    <div id="partieAjax"  ></div>
    </div>
  </div><!-- row -->
  </div>
</div>
</div>
</center>
@endsection