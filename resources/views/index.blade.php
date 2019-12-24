@extends('layouts.layout')

@section('contenu')
<!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-8">24% higher yesterday</span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-8">$390,212 before tax</span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-8">23% average duration</span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">32.16%</p>
                  <span class="tx-11 tx-roboto tx-white-8">65.45% on average time</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        
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
@endsection

    