  <!-- sidebar -->
  <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <ul>
          <li>
              <a class="nav-link scrollto active" href="{{ route('index') }}">Home</a>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">Our Schollars</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">Members</a></li>
          <li><a href="{{ route('audios.getList') }}">Audios</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                  <li><a href="{{ route('history-tidjaniya') }}">Tidjaniya</a></li>
                  <li class="dropdown"><a href="#"><span>Sidi Ahmed Tidjani</span> <i
                              class="bi bi-chevron-right"></i></a>
                      <ul>
                          <li><a href="{{ route('history') }}">Summary Of His Life</a></li>
                          <li><a href="{{ route('lineage') }}">His Lineage</a></li>
                          <li><a href="#">Deep Drop Down 3</a></li>
                          <li><a href="#">Deep Drop Down 4</a></li>
                          <li><a href="#">Deep Drop Down 5</a></li>
                      </ul>
                  </li>
                  <li><a href="{{ route('faydha') }}">Faydha</a></li>
                  <li><a href="#">Condition List</a></li>
                  <li><a href="#">Drop Down 4</a></li>
              </ul>
          </li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          <li><a href="{{ route('login') }}" class="getstarted scrollto">Login</a></li>
      </ul>
  </div>
  <!-- end sidebar  -->

  <script type="text/javascript">
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
  </script>
