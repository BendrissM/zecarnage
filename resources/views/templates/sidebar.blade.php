<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/adminlte/img/br.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Search Box -->
      @yield('search')
      <!-- /.Search Box -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/"><i class="fa fa-home"></i> <span>Page d'Acceuil</span></a></li>
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="/posts"><i class="fa fa-file-text"></i> <span>All Players</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>