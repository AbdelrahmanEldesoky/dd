<section class="main-header navbar navbar-expand navbar-white navbar-light">


            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dashboard.index.index')}}" class="nav-link">الصفحة الرئسية</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dashboard.contact.index')}}" class="nav-link">تواصل معنا</a>
            </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
    
            <!-- Messages Dropdown Menu -->
      
            <!-- Notifications Dropdown Menu -->

 
            </ul>
            <ul class="navbar-nav ml-auto">
            
                <a ></a>
     <a href="{{ route('logout') }}" class="btn btn-danger btn-flat" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">تسجيل الخروج</a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>

</ul>
    </section>



