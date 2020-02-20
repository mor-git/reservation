@extends('layouts.layout')
 
@section('contenu')

    <!-- ########## START: MAIN PANEL ########## -->
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

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          
        <!--<h6 class="br-section-label">Basic Form Wizard with Validation</h6>-->
        <form method="POST" action="{{ url('/addAgence')}}">
        <div id="wizard2">
            <h3>Agence Information</h3>
            <section>
              <input type="hidden" value="{{csrf_token()}}" name="_token" />
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Nom Agence: <span class="tx-danger">*</span></label>
                <input id="name" class="form-control" name="name" placeholder="Nom de l'agence" type="text" required>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Téléphone: <span class="tx-danger">*</span></label>
                <input id="phone" class="form-control" name="phone" placeholder="Phone" type="text" required>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Structure: <span class="tx-danger">*</span></label>
                <select id="structure" class="form-control" name="structure">
                    <option value="">Choix Structure</option>
                    @foreach($les_structures as $les)
                    <option value="{{ $les->id }}">{{ $les->name }}</option>
                    @endforeach
                </select>
              </div><!-- form-group -->
            </section>
                        <input type="hidden" value="ddd"  id="adr_c" name="adr_c" >
                        <!--<input type="hidden" value="ddd"  id="lat" name="lat" >-->
                        <!--<input type="hidden"   value="ddd" id="lng" name="lng" >-->
            <h3>Position Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Adresse: <span class="tx-danger">*</span></label>
                <input id="adresse" class="form-control" name="adresse" placeholder="Adresse" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Details</h3>
            <section>
            <div class="form-group wd-xs-300">
                <label class="form-control-label">Région<span class="tx-danger">*</span>&nbsp; Ville : <span class="tx-danger">*</span></label>
                <input id="adrCompl" class="form-control" name="adrCompl" readonly type="text">
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Latitude: <span class="tx-danger">*</span></label>
                <input id="lat" class="form-control" name="lat" readonly type="text">
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Longitude : <span class="tx-danger">*</span></label>
                <input id="lng" class="form-control" name="lng" readonly type="text">
              </div><!-- form-group -->
            </section>
        </div>
      </form>
      </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
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
  <footer class="br-footer">
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
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
    <script>
      $(document).ready(function(){
        'use strict';

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#name').parsley();
                var lname = $('#phone').parsley();
                var ffname = $('#structure').parsley();

                if(fname.isValid() && lname.isValid() && ffname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                  ffname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                var adresse = $('#adresse').parsley();
                if(email.isValid() && adresse.isValid()) {
                  return true;
                } else { 
                  email.validate();
                  adresse.validate();
                 }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } 
             // Step 2 form validation
             if(currentIndex === 2) {
                var region = $('#adrCompl').parsley();
                var latitude = $('#lat').parsley();
                var longitude = $('#lng').parsley();
                if(region.isValid() && latitude.isValid() && longitude.isValid()) {
                  return true;
                } else { 
                  region.validate();
                  latitude.validate();
                  longitude.validate();
                }
              }else { 
              return true; 
            }
          }
        });

      });
    </script>
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

