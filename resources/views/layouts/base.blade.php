<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts/styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Recursos y estilos-->

      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>

              </a>
              <ul class="dropdown-menu">
                <!-- TODO: Informacion de usuario -->
                <li class="user-header">
                  <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>


                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">

            {{--TODO: Informacion del usuario  --}}
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

          </div>
        </div>
        {{--TODO: Menu    --}}
        @include('layouts/menu')
      </section>
    </aside>

    <div class="content-wrapper">

      <!-- TODO: Titulo y subtitulo -->
      <section class="content-header">
        @yield('header')
      </section>

      <!-- TODO: Contenido de la pagina -->
      <section class="content">
        @yield('content')
      </section>
    </div>

    <!-- TODO: Pie de pagina -->
    <footer class="main-footer">
      @include('layouts/footer')
    </footer>

  </div>

  @include('layouts/scripts')

</body>
</html>
