@extends('layouts.layout')

@section('contenu')
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
<center>
<div class="container">
<div style="margin-left : 100px">
  <div class="row mg-t-10">
    <div class="col-xl-8">
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Formulaire Compteur</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  method="POST" action="{{ url('/addCompteur') }}" id ="formcom">
            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
            <div class="row">
              <label class="col-sm-2 form-control-label">Libelle: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="libelle" class="form-control" placeholder="Libelle">
              </div>
            </div><!-- row -->
            <div class="form-layout-footer mg-t-30">
              <button class="btn btn-info" type="submit">Valider</button>
              <button class="btn btn-secondary" type="reset">Annuler</button>
            </div><!-- form-layout-footer -->
      </form>
      </div><!-- form-layout -->
    </div><!-- col-6 -->
    @foreach($compt as $cpt)
    <li><a href="{{ url('/ticket', $cpt->id) }}">Compter</a></li>
    @endforeach
    <div id="partieAjax"  ></div>
    </div>
  </div><!-- row -->
</div>
</div>
</center>
</div>
@endsection
