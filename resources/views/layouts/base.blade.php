<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TecnoCompu | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts/styles')
</head>
<body class="hold-transition skin-black sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TC</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TecnoCompu</b></span>
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

                <span class="hidden-xs">Nombre de usuario</span>

              </a>
              <ul class="dropdown-menu">
                <!-- TODO: Informacion de usuario -->
                <li class="user-header">
                  <h3>Nombre de usuario</h3>
                </li>


                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Salir</a>
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
