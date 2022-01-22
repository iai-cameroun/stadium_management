<!-- Header start -->
<header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

  <div class="row container box">
      <div class="col-md-5">
          <!-- Logo start -->
          <div class="brand">
              <h1><a class="scroll-to" href="#top"><img class="img-responsive" src="img/logo-red.gif" alt="Terrain mutisports"></a></h1>
          </div>
          <!-- Logo end -->
      </div>

      <div class="col-md-7">
          <div class="pull-right">
              <div class="header-info pull-right">
                  <div class="contact pull-left">CONTACT: (237) 699999999</div>
                  <!-- Language Switch start -->
                  <div class="language-switch pull-right">
                      <div class="dropdown">
                          <a data-toggle="dropdown" href="#" id="language-switch-dropdown">Select your language </a>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="language-switch-dropdown">
                              <li><a href="#"><img src="img/flags/United-States.png" alt="usa"> English</a></li>
                              <li><a href="#"><img src="img/flags/Germany.png" alt="germany"> German</a></li>
                              <li><a href="#"><img src="img/flags/France.png" alt="france"> French</a></li>
                          </ul>
                      </div>
                  </div>
                  <!-- Language Switch end -->
              </div>
          </div>

          <div class="clearfix"></div>

          <!-- start navigation -->
          <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                  <!-- Toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="img/logo-red.gif" alt="Terrain multisports"></a>
                  </div>
                  <!-- Collect the nav links, for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <!-- Nav-Links start -->
                      <ul class="nav navbar-nav navbar-right">
                          <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                          <li><a href="#services" class="scroll-to">Services</a></li>
                          <li><a href="#vehicles" class="scroll-to">stade Models</a></li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="blog-posts.html">Blog Posts</a></li>
                                  <li><a href="blog-single-post.html">Blog Single Post</a></li>
                                  <li><a href="error404.html">Error 404</a></li>
                              </ul>
                          </li>
                          <li><a href="#locations" class="scroll-to">Locations</a></li>
                          @if(!Auth::guest() && (Auth::user()->role == "C" || Auth::user()->role == "D"))
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->username}} <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ route('frontend.booking_history',Auth::user()->id) }}">Historique des réservations</a></li>
                                  <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                              </ul>
                          </li>
                          <form id="logout-form" action="{{ url('user-logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                          @else
                          <li><a href="{{route('user-login')}}" class="scroll-to">Connexion</a></li>
                          @endif
                      </ul>
                      <!-- Nav-Links end -->
                  </div>
              </div>
          </nav>
          <!-- end navigation -->
      </div>
  </div>

</header>
<!-- Header end -->