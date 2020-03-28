@extends('layouts.layout')

@section('contenu')
<!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel    mg-b-30">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>
      <!--{{ Auth::user()->name }}-->
      @if ( Auth::user()->profil_id == 1)
      <div class="br-pagebody">
        <div class="card shadow-base bd-0 pd-25 mg-t-20">
          <div class="d-md-flex justify-content-between align-items-center">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Delivery Overview</h6>
              <p class="mg-b-0">Past 30 Days — Last Updated Oct 20, 2017</p>
            </div>
            <div class="wd-200 mg-t-20 mg-md-t-0">
              <select class="form-control select2" data-placeholder="Choose location">
                <option label="Choose one"></option>
                <option value="1" selected>New York</option>
                <option value="2">San Francisco</option>
                <option value="3">Los Angeles</option>
                <option value="4">Chicago</option>
                <option value="5">Seattle</option>
              </select>
            </div><!-- wd-200 -->
          </div><!-- d-flex -->

          <div id="mapShiftWorker" class="ht-300 ht-sm-400 mg-t-25"></div>

          <div class="row row-xs mg-t-25">
            <div class="col-sm-4">
              <div class="tx-center pd-y-15 bd">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">New Deliveries</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">12,344</h4>
                <span class="tx-12 tx-danger tx-roboto">2.7% increased</span>
              </div>
            </div><!-- col-4 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <div class="tx-center pd-y-15 bd">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Delivered</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">24,333</h4>
                <span class="tx-12 tx-danger tx-roboto">2.7% decreased</span>
              </div>
            </div><!-- col-4 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <div class="tx-center pd-y-15 bd">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Returned</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">432</h4>
                <span class="tx-12 tx-success tx-roboto">2.7% decreased</span>
              </div>
            </div><!-- col-4 -->
          </div><!-- row -->
          
        </div><!-- card -->
      </div><!-- br-pagebody -->
      @elseif ( Auth::user()->profil_id == 2)
      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <!--<div class="bg-info rounded overflow-hidden" id="monDiv1">-->
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-65 tx-semibold tx-uppercase tx-white-8 mg-b-10">Total</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65" ><span id="compteur1">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3     1,975,224  -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-40 tx-semibold tx-uppercase tx-white-8 mg-b-10">RESERVATION</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65"><span id="compteur3">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-45 tx-semibold tx-uppercase tx-white-8 mg-b-10">En attente</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65"><span id="compteur4">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <!--<div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0" id="monDiv2">-->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-30 tx-semibold tx-uppercase tx-white-8 mg-b-10">Numéro Appeler</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65"><span id="compteur2">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 --> 
        </div><!-- row -->
      </div>
      @else
      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden" id="monDiv1">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-60 tx-semibold tx-uppercase tx-white-8 mg-b-10">Total</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65" ><span id="compteur1">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3     1,975,224  -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <!--<i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>-->
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-40 tx-semibold tx-uppercase tx-white-8 mg-b-10">RESERVATION</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65"><span id="compteur3">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <!--<i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>-->
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-50 tx-semibold tx-uppercase tx-white-8 mg-b-10">En attente</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65"><span id="compteur4">0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0" id="monDiv2">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <!--<i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>-->
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont mg-l-30 tx-semibold tx-uppercase tx-white-8 mg-b-10">Numéro Appeler</p>
                  <p class="tx-50 tx-white tx-lato tx-bold mg-b-0 lh-1 mg-l-65"><span id="compteur2" >0</span></p>
                  <span class="tx-11 tx-roboto tx-white-8 mg-l-60">Tickets</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
            <div class="row mg-l-90 mg-t-10">
              <input id="suivant" class="btn btn-primary" type="button" value="Suivant">
            </div>
          </div><!-- col-3 -->
          <br><br><br><br><br><br> <br><br>
          <br><br><br><br><br>  
          <div class="row mg-l-1 mg-t-20 btn-block">
              <input name="" id="btnR" class="btn btn-primary btn-block" type="button" value="Réinitialiser">
          </div>
        </div><!-- row -->
      </div>
      @endif
<!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')
<?php
  if(Auth::check())
    $idd = Auth::user()->agences->guichets;
    foreach($idd as $id){
      $idCompteur = $id->compteur_id;
?>
<script>
  $(document).ready(function(){ 
    var idCompteur = <?php echo ($idCompteur);?>;
    console.log('ID Compteur:'+idCompteur);
      var cpt = 0;
      
      $.ajax({
        url : "http://localhost:8000/actuelle/"+idCompteur,
        dateType : "json",
        success:function(data){
          console.log(data);
          cpt = data;
          $("#compteur1").text(data);
        }
      })
      $.ajax({
        url : "http://localhost:8000/appeler/"+idCompteur,
        dateType : "json",
        success:function(data){
          console.log(data);
          $("#compteur2").text(data);
        }
      })

      
    $('#monDiv1').click(function(){

      $.ajax({
            url : "http://localhost:8000/ticket/"+idCompteur,
            dateType : "json",
            success:function(data){
              console.log(data);
              cpt = data;
              $("#compteur1").text(data);
            }
          })
    });
    $('#suivant').click(function(){

      $.ajax({
            url : "http://localhost:8000/utiliser/"+idCompteur,
            dateType : "json",
            success:function(data){
              console.log(data);
              var reste = cpt - data;
              $("#compteur2").text(data);
              $("#compteur4").text(reste);
            }
          })
    });

    $('#btnR').click(function(){

      $.ajax({
            url : "http://localhost:8000/reinitialiser/"+idCompteur,
            dateType : "json",
            success:function(data){
              console.log(data);
              
              var result = $.parseJSON(data);
              //console.log(result['libelle']);
              $("#compteur1").text(result.totalTicket);
              $("#compteur2").text(result.ticketUtiliser);
              $("#compteur4").text(0);
            }
          })
      });
    
  });
</script>
<?php } ?>
@endsection

