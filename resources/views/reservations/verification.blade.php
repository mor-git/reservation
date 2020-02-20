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
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Structure: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-12 select2" name="structure" data-placeholder="Donnez la structure" id="structure">
                  <option label="Donnez la structure"></option>
                  <!--foreach($les_structures as $structure)-->
                  <!--<option value=""></option>-->
                  <!--endforeach- { $structure->id }}-- { $structure->name }}--->
                </select>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Région: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-12 select2" id="region" name="region" data-placeholder="Donnez la structure">
                  <option label="Donnez la région"></option>
                 <!--foreach($les_agences as $agence)-->
                 <!-- <option value=""></option>-->
                  <!--endforeach { $agence->id }} { $agence->region }}-->
                </select>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Ville: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-12 select2" id="ville" name="ville" data-placeholder="Donnez la structure">
                  <option label="Choix la ville"></option>
                  <!--foreach($les_agences as $agence)-->
                  <!--<option value=""></option>-->
                  <!--endforeach { $agence->id }} { $agence->ville }}-->
                </select>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-group">
              <label class="col-sm-4 form-control-label">Agence: <span class="tx-danger">*</span></label>
                <select class="form-control col-sm-12 select2" name="agence" data-placeholder="Donnez la structure" id="agence">
                  <option label="Donnez l'agence"></option>
                  <!--foreach($les_agences as $agence)-->
                  <!--<option value=""></option>-->
                  <!--endforeach { $agence->id }} { $agence->name }}-->
                </select>
              </div>
            </div><!-- col-4 -->
            <div class="form-layout-footer mg-t-30">
              <button class="btn btn-info" type="submit" id="recherche">Recherche</button>
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
@section('script')
<script> 
  $(document).ready(function(){ 
      
    $.ajax({
        url : "http://localhost:8000/listeregion",
        dataType : "json",
        success :function(data){
          $.each(data, function(cle, valeur){
            $("#region").append("<option value='"+valeur.idR+"'>"+valeur.nomR+"</option>");
          });
        }
      })

      $('#region').change(function(){
          $("#ville").empty();
          $("#ville").append("<option value=''>Choix la ville</option>");
          var lis = $("#region").val();
          $.ajax({
          url : "http://localhost:8000/listedepartement/"+lis,
          dataType : "json",
          success :function(data){
            $.each(data, function(cle, valeur){
              $("#ville").append("<option value='"+valeur.idV+"'>"+valeur.nomV+"</option>");
            });
          }
        })
      });
      $('#recherche').submit(function(){

        return false;
      });
  });
</script>
@endsection