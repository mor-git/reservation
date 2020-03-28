@extends('layouts.layout')

@section('contenu')
<center>
  <style>
    #partieAjax{
      background-color : white;
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
<div style="margin-left : 70px">
  <div class="row mg-t-10">
    <div class="col-xl-8">,
    <div id="erreur"></div>
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Formulaire Agent</h6>
        
        <form  method="POST" action="{{ url('/addUser') }}" id="form">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="row">
              <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Phone: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required>
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Email: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="email" id="mail" name="mail" class="form-control" placeholder="Email" required>
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
              <label class="col-sm-2 form-control-label">Password: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
            </div><!-- row -->
            <div class="row mg-t-10">
                <label class="col-sm-2 form-control-label">Agence: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select class="form-control select2" name="agence" data-placeholder="Donnez la structure" id="agence">
                    <option label="Donnez l'agence"></option>
                    @foreach($les_agences as $one)
                    <option value="{{ $one->id}}">{{ $one->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div><!-- col-4 -->
            <div class="row mg-t-10">
                <label class="col-sm-2 form-control-label">Profil: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select class="form-control select2" name="profil" data-placeholder="Donnez le Profil" id="profil">
                    <option label="Choix d'un Compteur"></option>
                    @foreach($les_profils as $profil)
                    <option value="{{ $profil->id}}">{{ $profil->libelle}}</option>
                    @endforeach
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
</div>
</center>
@endsection