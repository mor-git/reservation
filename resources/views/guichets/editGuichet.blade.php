@extends('layouts.layout')

@section('contenu')
<center>
<div class="container">
<div style="margin-left : 180px">
  <div class="row mg-t-100">
    <div class="col-xl-8">
    <div id="erreur"></div>
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Formulaire de Modification Guichet</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  method="post" action="{{ url('/updateGuichet', $guichet->id ) }}" id="form">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="row">
              <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" id="nom" name="nom" value="{{ $guichet->name}}" class="form-control">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
                <label class="col-sm-2 form-control-label">Agence: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select class="form-control select2" name="agence" data-placeholder="Donnez la structure" id="agence">
                    <!--<option label="Donnez l'agence"></option>
                    foreach($agences as $one)-->
                    <option value="{{ $guichet->agence_id}}">{{ $guichet->agences->name}}</option>
                    <!--endforeach-->
                  </select>
                </div>
            </div><!-- col-4 -->
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
  <footer class="br-footer" style="margin-left : 100px">
    <div class="footer-left">
      <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
      <div>Attentively and carefully made by ThemePixels.</div>
    </div>
    <div class="footer-right d-flex align-items-center">
      <span class="tx-uppercase mg-r-10">Share:</span>
      <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
      <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
    </div>
  </footer>
  </div>
</div>
</center>
@endsection