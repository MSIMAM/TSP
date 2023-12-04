 {{-- =================== main header ============ --}}
 <div class="header">
     <div class="header-left active">
         <a href="{{ route('home') }}" class="logo">
             {{-- ============ logo image ============ --}}
             <img src="{{ asset('styles/assets/img/logo.jpg') }}" style="width: 50px; height: 50px" alt="">
         </a>
         <a href="{{ route('home') }}" class="logo-small">
             <img src="{{ asset('styles/assets/img/logo.jpg') }}" alt="">
         </a>
         <p class="pt-1" style="font-weight: bold;">Maghrebb</p>
         <a id="toggle_btn" href="javascript:void(0);">
         </a>
     </div>

     <a id="mobile_btn" class="mobile_btn" href="#sidebar">
         <span class="bar-icon">
             <span></span>
             <span></span>
             <span></span>
         </span>
     </a>

     <ul class="nav user-menu">

         <li class="nav-item">
             <div class="top-nav-search">
                 <a href="javascript:void(0);" class="responsive-search">
                     <i class="fa fa-search"></i>
                 </a>
                 <form action="#">
                     <div class="searchinputs">
                         <input type="text" placeholder="Search Here ...">
                         <div class="search-addon">
                             <span><img src="{{ asset('styles/assets/img/icons/closes.svg') }}" alt="img"></span>
                         </div>
                     </div>
                     <a class="btn" id="searchdiv"><img src="{{ asset('styles/assets/img/icons/search.svg') }}"
                             alt="img"></a>
                 </form>
             </div>
         </li>

         <li class="nav-item dropdown has-arrow main-drop">
             <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                 <span class="user-img"><img src="{{ Storage::url(Auth::user()->profile) }}" alt="">
                     <span class="status online"></span></span>
             </a>
             <div class="dropdown-menu menu-drop-user">
                 <div class="profilename">
                     <div class="profileset">
                         <span class="user-img"><img src="{{ Storage::url(Auth::user()->profile) }}" alt="">
                             <span class="status online"></span></span>
                         <div class="profilesets">
                             <h6>{{ Auth::user()->name }}</h6>
                             <h5> {{ __('Active') }} </h5>
                         </div>
                     </div>
                     <hr class="m-0">
                     <a class="dropdown-item" href="{{ route('admin.index.edit', Auth::user()->uuid) }}"> <i class="me-2" data-feather="user"></i> My
                         Profile</a>
                     <hr class="m-0">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                             <img
                             src="{{ asset('styles/assets/img/icons/log-out.svg') }}" class="me-2"
                             alt="img">
                         {{ __('Logout') }}
                     </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                 </div>
             </div>
         </li>
     </ul>

 </div>
