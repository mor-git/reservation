 <!-- ########## START: LEFT PANEL ########## -->
 <div class="br-logo"><a href="{{ url('/accueil') }}"><span>[</span>Yom<i>Bal</i><span>]</span><!--<span>[</span>Yombal <i>plus</i><span>]</span>--></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ url('/accueil') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        @if ( Auth::user()->profil_id == 1)
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Types Structures</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('/typeStructure') }}" class="sub-link">New Type Structure</a></li>
            <li class="sub-item"><a href="{{ url('/showTypeStructures') }}" class="sub-link">List Types Structures</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Structures</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('/structure') }}" class="sub-link">New Structure</a></li>
            <li class="sub-item"><a href="{{ url('/showStructures') }}" class="sub-link">List Structures</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Agences</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('/agence') }}" class="sub-link">New Agence</a></li>
            <li class="sub-item"><a href="{{ url('/showAgences') }}" class="sub-link">List Agences</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Guichets</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('/guichet') }}" class="sub-link">New Guichet</a></li>
            <li class="sub-item"><a href="{{ url('/showGuichets') }}" class="sub-link">List Guichets</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Compteurs</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('/compteur') }}" class="sub-link">New Compteur</a></li>
            <li class="sub-item"><a href="{{ url('/showCompteurs') }}" class="sub-link">List Compteurs</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-users tx-18"></i>
            <span class="menu-item-label">Utilisateurs</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="{{ url('/users') }}" class="sub-link">New User</a></li>
            <li class="sub-item"><a href="{{ url('/showUsers') }}" class="sub-link">List Users</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-users tx-18"></i>
            <span class="menu-item-label">Profils Utilisateurs</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="{{ url('/profil') }}" class="sub-link">New Profil</a></li>
            <li class="sub-item"><a href="{{ url('/showProfils') }}" class="sub-link">List Profils</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-mobile tx-18"></i>
            <span class="menu-item-label">Rèservations</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="{{ url('/verification') }}" class="sub-link">Vérification</a></li>
            <li class="sub-item"><a href="{{ url('/valider') }}" class="sub-link">Réservation</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <!--<li class="br-menu-item">
          <a href="{{ url('/reservation') }}" class="br-menu-link">
            <i class="fa fa-mobile tx-20"></i>
            <span class="menu-item-label">Reservations</span>
          </a>--><!-- br-menu-link -->
        <!--</li>--><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Région</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="{{ url('/region') }}" class="sub-link">New Région</a></li>
            <li class="sub-item"><a href="{{ url('/showRegions') }}" class="sub-link">List Régions</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Ville</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="{{ url('/ville') }}" class="sub-link">New Ville</a></li>
            <li class="sub-item"><a href="{{ url('/showVilles') }}" class="sub-link">List Ville</a></li>
          </ul>
        </li><!-- br-menu-item -->
        @elseif ( Auth::user()->profil_id == 2)
            <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">Guichets</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ url('/guichet') }}" class="sub-link">New Guichet</a></li>
                <li class="sub-item"><a href="{{ url('/showGuichets') }}" class="sub-link">List Guichets</a></li>
              </ul>
            </li><!-- br-menu-item -->
        @else
            <br><br>
            <li class="br-menu-item">
              <h5>Faire avancer le compteur suivant les clients  !!!</h5>
              <h5>Quant on termine avec un client, on appuie sur avancer pour appeler le suivant !!!</h5>
            </li>
        @endif
      </ul><!-- br-sideleft-menu -->
    </div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Messages</label>
                <a href="">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media-list-link">
                  <div class="media">
                    <img src="https://via.placeholder.com/500" alt="">
                    <div class="media-body">
                      <div>
                        <p>Donna Seay</p>
                        <span>2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="media-list-link read">
                  <div class="media">
                    <img src="https://via.placeholder.com/500" alt="">
                    <div class="media-body">
                      <div>
                        <p>Samantha Francis</p>
                        <span>3 hours ago</span>
                      </div><!-- d-flex -->
                      <p>My entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                
                <div class="dropdown-footer">
                  <a href=""><i class="fas fa-angle-down"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Notifications</label>
                <a href="">Mark All as Read</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media-list-link read">
                  <div class="media">
                    <img src="https://via.placeholder.com/500" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="media-list-link read">
                  <div class="media">
                    <img src="https://via.placeholder.com/500" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer">
                  <a href=""><i class="fas fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
              <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname">{{ Auth::user()->name }}</h6>
                <p>{{ Auth::user()->email }}</p>
                <p>{{ Auth::user()->profils->libelle }}</p>
              </div>
              <hr>
              
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href="{{ route('logout') }}" 
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="icon ion-power"></i> Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->