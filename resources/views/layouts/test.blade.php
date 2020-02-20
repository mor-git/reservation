@extends('layouts.layout')

@section('contenu')
<div class="d-flex align-items-center justify-content-center ht-100v">
    <img src="https://via.placeholder.com/1920x1280" class="wd-100p ht-100p object-fit-cover" alt="">

    <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> DIGI <span class="tx-info">WORK</span> <span class="tx-normal">]</span></div>
        <div class="tx-white-5 tx-center mg-b-60">Digi221</div>

                    <form method="POST" action=""><!-- { route('register') }}-->
                        @csrf

                        <div class="form-group">
                        <input id="name" placeholder="Name" type="text"   class="form-control c-outline-dark @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                           
                        </div>
                        <div class="form-group">
                            
                        <input id="tel" placeholder="Phone" type="number"  class="form-control c-outline-dark @error('tel') is-invalid @enderror" name="tel"  required autocomplete="tel" autofocus>
                        </div>
                        <div class="form-group">
                       
                        <input id="adr" placeholder="Adresse" type="text" class="form-control c-outline-dark @error('adr') is-invalid @enderror" name="adr" required autocomplete="adr" autofocus>
                        </div>
                        <input type="hidden" value="ddd"  id="adr_c" name="adr_c" >
                        <input type="text" value=""  id="lat" name="lat" readonly>
                        <input type="text"   value="" id="lng" name="lng" readonly>
                        <div class="form-group">
                        <input id="email" placeholder="Mail" type="email"  class="form-control c-outline-dark @error('email') is-invalid @enderror" name="email"  required autocomplete="email">
                    
                        </div>
                        <div class="form-group">
                        <input id="password" placeholder="password" type="password"  class="form-control c-outline-dark @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                           
                        </div>
                        <div class="form-group">
                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control c-outline-dark " name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                        <select name="profil" id="" class="form-control c-outline-dark" >
                            <option value=""></option>
                            <option value="Entreprise">Entreprise</option>
                            <option value="Particulier">Particulier</option>
                            <option value="Client">Client</option>
                        </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   register
                                </button>
                            </div>
                        </div>
                     </form>
                <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">@lang('login')</a></div>
            <!-- {route('register')}} --> 
            </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
  </div>
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
                 document.getElementById('adr').value = results[1].formatted_address;
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
               
                 document.getElementById('adr_c').value = may2;
                 $('#overlay').hide();
                 //document.getElementById('adr_c').value = latLng.lng();
             }
             
         })
     }
 
  
  
</script>
<script>
$(document).ready(function() {
  
   $('#overlay').hide();
   $("#adr").click(function(){
      $('#overlay').show();
  });
  $("#fermodal").click(function(){
      $('#overlay').hide();
  });
 });</script>
 


@endsection
