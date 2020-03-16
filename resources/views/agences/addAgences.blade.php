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
    <div class="col-xl-10">
      <div class="form-layout form-layout-4">
        <h6 class="br-section-label  mg-t-5">Nouveau Agence</h6>
        <form method="POST" action="{{ url('/addAgence') }}">
        <div class="row">
            <div class="col-md-6 form-layout-4 mg-t-6">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Structure: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <select class="form-control select2" name="structure" data-placeholder="Donnez la Structure">
                            <option label="Donnez la Structure"></option>
                            @foreach($les_structures as $struct)
                            <option value="{{ $struct->id }}">{{ $struct->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- col-4 -->
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Agence: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="name" class="form-control" placeholder="Nom Agence">
                    </div>
                </div><!-- row -->
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Région: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <select class="form-control select2" name="region" id="region" data-placeholder="Donnez la Région">
                            <option label="Donnez la Région"></option>
                            
                        </select>
                    </div>
                </div><!-- col-4 -->
                <div class="row mg-t-10"> 
                    <label class="col-sm-3 form-control-label">Ville: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <select class="form-control select2" name="ville" id="ville" data-placeholder="Donnez la Ville">
                            <option label="Donnez la Ville"></option>
                            
                        </select>
                    </div>
                </div><!-- col-4 -->
            </div>
            <div class="col-md-6 form-layout-4 mg-t-6">
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Phone: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                    </div>
                </div><!-- row -->
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Adresse: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input id="adresse" type="text" name="adresse" class="form-control" placeholder="Adresse Complet">
                    </div>
                </div><!-- row -->
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Latitude: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input id="lat" type="text" name="lat" class="form-control" placeholder="Latitude" readonly>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-10">
                    <label class="col-sm-3 form-control-label">Longitude: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input id="lng" type="text" name="lng" class="form-control" placeholder="Longitude" readonly>
                    </div>
                </div><!-- row -->
            </div>
            <div class="mg-t-20 btn-block">
              <button class="btn btn-info btn-block" type="submit">Valider</button>
              <!--<button class="btn btn-secondary">Annuler</button>-->
            </div><!-- form-layout-footer -->
            <div class=" btn-block">
              <!--<button class="btn btn-info" type="submit">Valider</button>-->
              <button class="btn btn-secondary btn-block">Annuler</button>
            </div><!-- form-layout-footer -->
        </div>
        </form>
      </div><!-- form-layout -->
    </div><!-- col-6 -->
    <div id="partieAjax"  ></div>
    </div>
  </div><!-- row -->
  </div>
<!-- ----Modal -------------------------------->
<div id="overlay" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Adresse</h5>
                <button type="button" class="close" id="fermodal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="mpdal-body p-4">
                <div id="map" style="width:100%;height: 300px;"></div> 
            </div>
        </div>
    </div>
  </div>
<!-------Fin Modal --------------------------->
</div>
</div>
</center>
<!--<script>
$(document).ready(function(){

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    })

    $('#form').submit(function(){

        let name =  $('form').find('input[name="nom"]').val();  
        let agence =  $('form').find('select[name="agence"]').val();

        $.ajax({
            type : $(this).attr('method'),
            url  : $(this).attr('action'),
            data : $(this).serialize()
            })
            .done(function(data){
                $('#partieAjax').hide().append('<div class="row"><div class="col-xl-4">'+name+'</div><div class="col-md-4">'+agence+'</div></div>').slideDown();
                $('input').val('');
                $('select').val('');
            })
            .fail(function(data){
                $(".error").empty().append(data);
        });
    return false;
  });
});
</script>-->
<!---------------------Chargement Ville via région------------------------->
<script>
  $(document).ready(function(){
    
      $.ajax({
              url : "http://localhost:8000/listRegion",
              dateType : "json",
              success:function(data){
                //console.log(data);
                $.each(JSON.parse(data), function(cle, valeur){
                  $("#region").append("<option value='"+ valeur.id +"'>"+ valeur.nomRegion +"</option>");
                });
              }
          })
        $("#region").change(function(){
        $("#ville").empty();
        $("#ville").append("<option value=''></option>");
        var lis = $("#region").val();
    
        $.ajax({
            url : "http://localhost:8000/listVille/"+lis,
            dateType : "json",
            success:function(data){
              //console.log(data);
              $.each(JSON.parse(data), function(cle, valeur){
                $("#ville").append("<option value='"+valeur.id+"'>"+valeur.nomVille+"</option>");
              });
            }
        })
        
      });
  });
</script>
<!-------------------Fin Chargement Ville via région------------------------>
@endsection
@section('script')
<script>
var map;
function initMap() {
    var myLatLng = {lat: 14.727931977548339, lng: -16.048883801171883};
  
     map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 8
    });
  
    var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!',
          draggable: true
        });
  
     google.maps.event.addListener(marker, 'dragend', function(marker) {
        var latLng = marker.latLng;
        //console.log(latLng);
        
        document.getElementById('lat').value = latLng.lat();
        document.getElementById('lng').value = latLng.lng();
        info(latLng);
        
     });
   }
    
     function info(location){
         var lat = location.lat();
         var lng = location.lng();
         console.log(lat , lng);
         var latlng = new google.maps.LatLng(lat , lng);
         geocoder = new google.maps.Geocoder();
         geocoder.geocode({'latLng' : latlng} , function(results,status){
             if(status == google.maps.GeocoderStatus.OK){
                 //console.log(results[1]);
                 document.getElementById('adresse').value = results[1].formatted_address;
                 var may = [];
                 var may2 = [];
                 may = results[1].address_components;
                for(var i=0 ; i<= may.length-1 ; i++)
                 {        
                     var buufer = new  Array();
                     buufer =   may[i];
                     //console.log(buufer.long_name);
                     may2[i] = buufer.long_name;
                    
               
                 }
                 console.log(may2);
                 for(var j=0 ; j<= may2.length ; j++)
                 {        
                     un = may2[0];
                     troix = may2[3];
                     tout = un+","+troix;
                     document.getElementById('adrCompl').value = tout;
                 }
                 //document.getElementById('adrCompl').value = may2;
                 $('#overlay').hide();
                 //document.getElementById('adr_c').value = latLng.lng();
             }
             
         })
     }
</script>
<script>
$(document).ready(function() {
  
   $('#overlay').hide();
   $("#adresse").click(function(){
      $('#overlay').show();
  });
  $("#fermodal").click(function(){
      $('#overlay').hide();
  });
 });
 
 </script>
@endsection
