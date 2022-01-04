  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('personal.main.index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Главная
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{route('personal.liked.index')}}" class="nav-link">
              <i class="nav-icon far fa-heart"></i>
              <p>
                 Понравившиеся посты
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{route('personal.comment.index')}}" class="nav-link">
              <i class="nav-icon far fa-comment"></i>
              <p>
                Комментарии
              </p>
            </a>
          </li>
          
        </ul>
      </nav>

    </div>
     

         
  </aside>