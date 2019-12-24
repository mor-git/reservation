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
          <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-20p">Position</th>
                  <th class="wd-15p">Start date</th>
                  <th class="wd-10p">Salary</th>
                  <th class="wd-25p">E-mail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger</td>
                  <td>Nixon</td>
                  <td>System Architect</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>t.nixon@datatables.net</td>
                </tr>
                <tr>
                  <td>Garrett</td>
                  <td>Winters</td>
                  <td>Accountant</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                  <td>g.winters@datatables.net</td>
                </tr>
                <tr>
                  <td>Ashton</td>
                  <td>Cox</td>
                  <td>Junior Technical Author</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                  <td>a.cox@datatables.net</td>
                </tr>
                <tr>
                  <td>Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                  <td>c.kelly@datatables.net</td>
                </tr>
                <tr>
                  <td>Airi</td>
                  <td>Satou</td>
                  <td>Accountant</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                  <td>a.satou@datatables.net</td>
                </tr>
                <tr>
                  <td>Vivian</td>
                  <td>Harrell</td>
                  <td>Financial Controller</td>
                  <td>2009/02/14</td>
                  <td>$452,500</td>
                  <td>v.harrell@datatables.net</td>
                </tr>
                <tr>
                  <td>Timothy</td>
                  <td>Mooney</td>
                  <td>Office Manager</td>
                  <td>2008/12/11</td>
                  <td>$136,200</td>
                  <td>t.mooney@datatables.net</td>
                </tr>
                <tr>
                  <td>Jackson</td>
                  <td>Bradshaw</td>
                  <td>Director</td>
                  <td>2008/09/26</td>
                  <td>$645,750</td>
                  <td>j.bradshaw@datatables.net</td>
                </tr>
                <tr>
                  <td>Olivia</td>
                  <td>Liang</td>
                  <td>Support Engineer</td>
                  <td>2011/02/03</td>
                  <td>$234,500</td>
                  <td>o.liang@datatables.net</td>
                </tr>
                <tr>
                  <td>Bruno</td>
                  <td>Nash</td>
                  <td>Software Engineer</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                  <td>b.nash@datatables.net</td>
                </tr>
                <tr>
                  <td>Sakura</td>
                  <td>Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>2009/08/19</td>
                  <td>$139,575</td>
                  <td>s.yamamoto@datatables.net</td>
                </tr>
                <tr>
                  <td>Thor</td>
                  <td>Walton</td>
                  <td>Developer</td>
                  <td>2013/08/11</td>
                  <td>$98,540</td>
                  <td>t.walton@datatables.net</td>
                </tr>
                <tr>
                  <td>Finn</td>
                  <td>Camacho</td>
                  <td>Support Engineer</td>
                  <td>2009/07/07</td>
                  <td>$87,500</td>
                  <td>f.camacho@datatables.net</td>
                </tr>
                <tr>
                  <td>Serge</td>
                  <td>Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>2012/04/09</td>
                  <td>$138,575</td>
                  <td>s.baldwin@datatables.net</td>
                </tr>
                <tr>
                  <td>Zenaida</td>
                  <td>Frank</td>
                  <td>Software Engineer</td>
                  <td>2010/01/04</td>
                  <td>$125,250</td>
                  <td>z.frank@datatables.net</td>
                </tr>
                <tr>
                  <td>Zorita</td>
                  <td>Serrano</td>
                  <td>Software Engineer</td>
                  <td>2012/06/01</td>
                  <td>$115,000</td>
                  <td>z.serrano@datatables.net</td>
                </tr>
                <tr>
                  <td>Jennifer</td>
                  <td>Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>2013/02/01</td>
                  <td>$75,650</td>
                  <td>j.acosta@datatables.net</td>
                </tr>
                <tr>
                  <td>Cara</td>
                  <td>Stevens</td>
                  <td>Sales Assistant</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                  <td>c.stevens@datatables.net</td>
                </tr>
                <tr>
                  <td>Hermione</td>
                  <td>Butler</td>
                  <td>Regional Director</td>
                  <td>2011/03/21</td>
                  <td>$356,250</td>
                  <td>h.butler@datatables.net</td>
                </tr>
                <tr>
                  <td>Lael</td>
                  <td>Greer</td>
                  <td>Systems Administrator</td>
                  <td>2009/02/27</td>
                  <td>$103,500</td>
                  <td>l.greer@datatables.net</td>
                </tr>
                <tr>
                  <td>Jonas</td>
                  <td>Alexander</td>
                  <td>Developer</td>
                  <td>2010/07/14</td>
                  <td>$86,500</td>
                  <td>j.alexander@datatables.net</td>
                </tr>
                <tr>
                  <td>Shad</td>
                  <td>Decker</td>
                  <td>Regional Director</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                  <td>s.decker@datatables.net</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td>Bruce</td>
                  <td>Javascript Developer</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                  <td>m.bruce@datatables.net</td>
                </tr>
                <tr>
                  <td>Donna</td>
                  <td>Snider</td>
                  <td>Customer Support</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                  <td>d.snider@datatables.net</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

        <script>
        $('#datatable1').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Recherche...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
        });
        </script>
                 
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