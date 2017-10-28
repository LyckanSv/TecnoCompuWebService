<ul class="sidebar-menu" data-widget="tree">
  {{-- Titulo del menu --}}
  <li class="header">Menu Principal</li>

  {{-- Menu Home --}}

  <li class="treeview">
    <a href="#">
      <i class="fa fa-home"></i> 
      <span>Inicio</span>
    </a>
  </li>

  {{-- Menu Productos  --}}
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i> 
      <span>Productos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="#"><a href="#"><i class="fa fa-plus"></i> Crear {{url()->current()}}</a></li>
      <li class="#"><a href="#"><i class="fa fa-search"></i> Buscar </a></li>
      <li class="#"><a href="#"><i class="fa fa-pencil-square-o "></i> Editar </a></li>
    </ul>
  </li>

    {{-- Menu Promociones  --}}
  <li class="treeview">
    <a href="#">
      <i class="fa fa-tags"></i> 
      <span>Promociones</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="#"><a href="#"><i class="fa fa-plus"></i> Crear </a></li>
      <li class="#"><a href="#"><i class="fa fa-search"></i> Buscar </a></li>
      <li class="#"><a href="#"><i class="fa fa-pencil-square-o "></i> Editar </a></li>
    </ul>
  </li>

    {{-- Menu Usuarios  --}}
  <li class="treeview">
    <a href="#">
      <i class="fa fa-users"></i> 
      <span>Usuarios</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="#"><a href="#"><i class="fa fa-plus"></i> Crear </a></li>
      <li class="#"><a href="#"><i class="fa fa-search"></i> Buscar </a></li>
      <li class="#"><a href="#"><i class="fa fa-pencil-square-o "></i> Editar </a></li>
    </ul>
  </li>
  
</ul>
