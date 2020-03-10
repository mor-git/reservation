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
        <h6 class="br-section-label">Formulaire Type Structure</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  enctype="multipart/form-data" method="POST" action="{{ url('/addTypeStructure') }}" id ="formcom">
            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
            <div class="row">
              <label class="col-sm-2 form-control-label">Type: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="type" class="form-control" placeholder="Libelle">
              </div>
            </div><!-- row -->
            <div class="form-layout-footer mg-t-30">
              <button class="btn btn-info" type="submit">Valider</button>
              <button class="btn btn-secondary" type="reset">Annuler</button>
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
<script>
$(document).ready(function(){

  $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
  })

  $('form').submit(function() { 
      //let token = $('form').find('input[name="_token"]').val();
      let type =  $('form').find('input[name="type"]').val();
      
      $.ajax({ 
          type:'POST', 
          url: $(this).attr('action'), 
          data: $(this).serialize()
      })
      .done(function(data) {
          $('#partieAjax').hide().append("<table class='moris'><tr><th>"+type+"</th></tr></table>").slideDown();
          $('input').val('');
          console.log("Dialna");
      })
      .fail(function(data) {
          $(".error").empty().append(data);
          console.log("Dialoule");
      });
      return false;
  }); 
});
</script>
@endsection