@extends('layouts.layout')


@section('contenu')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Tables</a>
          <span class="breadcrumb-item active">Data Table</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Data Table</h4>
          <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Basic Responsive DataTable !!</h6>
          <div class="mg-b-10" style="padding-left: 820px;">
            <a href="{{ url('/indexGuichet', $agence->id )}}">
                <button class="btn btn-secondary" style="background-color: #0095B6;border-color:#0095B6"><i class='fas fa-plus' style='font-size:14px;color:white;'></i>&nbsp;New Guichet</button>
            </a>
          </div>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Number</th>
                  <th class="wd-15p">Agent</th>
                  <th class="wd-20p">Guichet</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead> 
              <tbody>
              @foreach($les_affecter as $affecter) 
                <tr>
                  <td>Num</td>
                  <td>{{ $affecter->name }}</td>
                  <td>{{ $affecter->agence->name }}</td>
                  <td>
                      <a href="{{ url('/editGuichet', $affecter->id) }}" ><i class='far fa-edit' style='font-size:20px'></i></a>
                      &nbsp;&nbsp;
                      <a href="{{ url('/editGuichet', $affecter->id ) }}" ><i class='far fa-trash-alt' style='font-size:20px;color:red'></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
                 
        </div><!-- br-section-wrapper -->
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

