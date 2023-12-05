<?php
			error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED);
			$page = $_GET['page'];
			switch($page){
				case "view" : include "view.php"; break;
				case "insert" : include "insert.php";break;
				case "update" : include "update.php";break;
				case "view_pulpen" : include "view_pulpen.php";break;
				
				case "beli": include "beli.php"; break;
				
				default : include "home.php";
				
			}
			?>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>     
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Akademik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=view_adminsiswa" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Calonsiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=view_kajur" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kajur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=view_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=view_adminjurusan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=view_adminpilihan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pilihan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>  
        </ul>
      </nav>