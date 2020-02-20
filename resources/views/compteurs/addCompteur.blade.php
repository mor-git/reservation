@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-left : 150px">
  <div class="row mg-t-100">
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
@endsection
