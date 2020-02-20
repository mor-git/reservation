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
<div class="container">
<div style="margin-left : 150px">
  <div class="row mg-t-100">
    <div class="col-xl-8">
    
      <div class="form-layout form-layout-4 ">
        <h6 class="br-section-label">Formulaire Structure</h6>
        <p class="br-section-text">A basic form where labels are aligned in left.</p>
        <form  enctype="multipart/form-data" method="POST" action="{{ url('/addStructure') }}" id ="formcom">
            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
            <div class="row">
              <label class="col-sm-2 form-control-label">Logo: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="file" name="logo" class="form-control" placeholder="Logo">
              </div>
            </div><!-- row -->
            <div class="row mg-t-20">
              <label class="col-sm-2 form-control-label">Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Name">
              </div>
            </div>
            <div class="row mg-t-10">
                <label class="col-sm-2 form-control-label">Type: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select class="form-control select2" name="type" id="type">
                    <option label="Donnez le Type de Structure"><option>
                    @foreach($types as $one)
                    <option value="{{ $one->id}}">{{ $one->type}}</option>
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
    <div id="partieAjax"  ></div>
    </div>
  </div><!-- row -->
</div>
</div>
</center>
<script>
/*$(document).ready(function(){

  $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
  })

  $('form').submit(function() { 
      //let token = $('form').find('input[name="_token"]').val();
      let logo =  $('form').find('input[name="logo"]').val();
      let name =  $('form').find('input[name="nom"]').val();
      let type =  $('form').find('select[name="type"]').val();
      
      $.ajax({ 
          type:'POST', 
          url: $(this).attr('action'), 
          data: $(this).serialize()
      })
      .done(function(data) {
          $('#partieAjax').hide().append("<table class='moris'><tr><th>"+logo+"</th><th>"+""+"</th><th>"+name+"</th><th>"+""+"</th><th>"+type+"</th></tr></table>").slideDown();
          $('input').val('');
          //console.log("Dialna");
      })
      .fail(function(data) {
          $(".error").empty().append(data);
          console.log("Dialoule");
      });
      return false;
  }); 
});*/
</script>
@endsection