<?php

use App\Http\Controllers\AdminController;

$admin = AdminController::admin();
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{ asset('fav.ico') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light" style="font-family: 'Pacifico', cursive;">Restuarent</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        @foreach ($admin as $a)
        <img src="{{asset('assets/upload/admin/'.$a->image)}}" class="img-circle elevation-2" alt="User Image">
        @endforeach
      </div>
      <div class="info">
        @foreach ($admin as $a)
        <?php
        $firstname = explode(" ", $a->name);
        ?>
        <a href="#" class="d-block" style="font-family: 'Pacifico', cursive;">{{$firstname[0]}}</a>
        @endforeach
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open {{Request::is('admindashboard')?'active':''}}">
          <a href="admindashboard" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item menu-open {{Request::is('menu')?'active':''}}">
          <a href="/menu" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Menu
            </p>
          </a>
        </li>
        <li class="nav-item menu-open {{Request::is('menu')?'active':''}}">
          <a href="/category" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Category
            </p>
          </a>
        </li>
        <li class="nav-item menu-open {{Request::is('menu')?'active':''}}">
          <a href="staff" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Staff
            </p>
          </a>
        </li>
        <li class="nav-item menu-open {{Request::is('menu')?'active':''}}">
          <a href="viewallorders" class="nav-link">
            <i class="nav-icon fas fa-shopping-basket"></i>
            <p>
              Orders
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>