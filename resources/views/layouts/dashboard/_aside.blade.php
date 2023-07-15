
    <section class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
              <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Landing</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                       <li class="nav-item">
                        <a href="{{route('dashboard.index.index')}}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            الصفحة الرئسية
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.about.index')}}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                             من نحن
                          </p>
                        </a>
                      </li>
                       <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-pager"></i>
                      <p>
                         خدماتنا
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('dashboard.service.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> العنوان / البيانات</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.service_feature.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>الشكاوي</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                    <li class="nav-item">
                      <a href="{{route('dashboard.our_feature.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           لماذا نحن 
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-pager"></i>
                        <p>
                           الشكاوي / الطلبات
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{route('dashboard.comment_tittle.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> العنوان / الوصف</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('dashboard.comment.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>خصائص</p>
                          </a>
                        </li>
                      </ul>
                    </li>
    
                    <li class="nav-item">
                      <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-pager"></i>
                        <p>
                           الاقسام  / المشاريع
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{route('dashboard.category.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>الاقسام </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('dashboard.product.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>المشاريع</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('dashboard.plan.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>خطة العمل</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('dashboard.post.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> المنشورات</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('dashboard.footer.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            footer 
                        </p>
                      </a>
                    </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->


    </section>



