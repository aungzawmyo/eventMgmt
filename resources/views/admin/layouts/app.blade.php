<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>  
    <style>
      nav{
        margin : 0 !important;
      }
      .brand-image{
        height: 40px;
      }
      /* .sticky-col {
            position: sticky;
            top: 0;
            height: 100vh;  
        } */
        .sticky-col {
            position: sticky;
            top: 60px; /* Adjust based on navbar height */
            height: calc(100vh - 60px); /* Adjust based on navbar height */
        }
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020; /* Ensure it is above other content */
        } 
    </style>
  </head>
  <body> 

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-white sticky-top ">
      <div class="container-fluid ">
        <a href="/admin/dashboard" class="navbar-brand">
          <img src="/asset/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <!-- <span class="brand-text font-weight-light">SmartStickies</span> -->
        </a>
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/dashboard" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/events" class="nav-link">Events</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/members" class="nav-link">Member</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link text-danger" href="/admin/logout" id="navbarDropdown4" role="button">
              Logout
            </a> 
          </li>
        </ul>
         
   
      </div>
    </nav>
    <!-- /.navbar --> 
    
    
    <div >
        @yield('content')
    </div>
        
    
    
    
     
    <footer class="m-4 mt-5">
        <center><p>&copy; 2024 My Event Dashboard. All rights reserved.</p></center>
    </footer>

  </body>
</html>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    