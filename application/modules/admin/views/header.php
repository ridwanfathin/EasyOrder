	<header class="main-header">
        <!-- Logo -->
        <a href="<?=base_url("admin")?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- <span class="logo-mini"><b>A</b>LT</span> -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Easy</b>Order</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url("assets/dist/img/avatar5.png")?>" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=base_url("assets/dist/img/avatar5.png")?>"class="img-circle" alt="User Image">
                    Administrator
                    <small>Easy Order Restaurant</small>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?= site_url('admin/signOut');?>"class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>