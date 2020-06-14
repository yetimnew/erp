@livewireStyles
</head>

<body>
    <div class="page" id="app">
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="icon-close"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="What are you looking for..." class="form-control">
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                                <div class="brand-text d-none d-lg-inline-block"><strong>TIMS</strong></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>TIMS</strong></div>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#"
                                class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link"><i class="fa fa-bell-o"></i>
                                    <span class="badge bg-red badge-corner">
                                    </span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">

                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong>No notification</strong></a></li>

                                </ul>
                            </li>
                            {{-- <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                </ul>
              </li> --}}
                            <li class="nav-item"><a class="nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"> <span class="d-none d-sm-inline">{{ __('Logout') }}
                                    </span> <i class="fas fa-sign-out-alt"></i></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </ul>

                    </div>
                </div>
            </nav>
        </header><!-- the whole page content -->
        <div class="page-content d-flex align-items-stretch">
