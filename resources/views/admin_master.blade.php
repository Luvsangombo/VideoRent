<!doctype html>
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<script>
    $(document).ready(function() {
      $("#sidebarCollapse").on('click',function() {
        $("#sidebar").toggleClass('active');
      });
    });
</script>

<style>
  .wrapper {
  display: flex;
  text-decoration: none;
  transition: all 0.4s;
}

#sidebar {
  min-width: 250px;
  max-width: 250px;
  background: #343a40;
  color: #fff;
  transition: all 0.4s;
  height: 100vh;
}

#sidebar.active {
  margin-left: -250px;
}

#sidebar .sidebar-header {
  padding: 20px;
  background: #343a40;
}

#sidebar ul.components {
  padding: 20px 0;
  /* border-bottom: 1px solid #47748b; */
}

#sidebar ul p {
  color: #fff;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px;
  font-size: 1.1em;
  display: block;
}

#sidebar ul li a:hover {
  color: #262933;
  background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
  color: #fff;
  background: #1b1d24;
}

a[data-toggle="collapse"] {
  position: relative;
}

.dropdown-toggle::after {
  display: block;
  position: absolute;
  top: 50%;
  right: 20%;
  transform: translateY(-50%);
}

ul ul a {
  font-size: 0.9em !important;
  padding-left: 30px !important;
  background: #1b1d24;
}
.container-fluid {
      padding-right: 0; 
    padding-left: 0;
}
@media (max-width: 768px) {
  #sidebar {
    margin-left: -250px;
  }

  #sidebar.active {
    margin-left: 0;
  }

  #sidebarCollapse span {
    display: none;
  }
}
</style>
<body>
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        @yield('name')
      </div>
      <ul class="lisst-unstyled components">
        <li>
          <a href="video_list">Бүх кинонууд</a>
        </li>
        <li>
          <a href="video">Кино нэмэх</a>
        </li>
        <li>
          <a href="rents_list">Захиалгууд</a>
        </li>
      </ul>
      <div class="sidebar-footer">
        
       <h3><a href="log_out">Гарах</a></h3>
      
      </div>
    </nav>
    <div id="content" class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     
          <div class="collapse navbar-collapse" id="navbarMenu">
            <button type="button" id="sidebarCollapse" class="btn btn-dark">
              <i class="fas fa-bars"></i><span> <span class="navbar-toggler-icon"></span></span>
            </button>
        </div>
      </nav>

      <div class="container">
        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>