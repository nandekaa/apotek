<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <img class="sidebar-brand-full" width="50" height="45" src="<?php echo base_url('assets/brand/logo.png')?>">
      <h5 class="sidebar-brand-full">Nama apotek</h4>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-title"></li>
        <li class="nav-item row"><span class="nav-item mx-5 col-5">
            Disty<br><span class="text-warning">Admin</span></span><div class="dropdown col-2">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-options')?>"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><svg class="icon me-2">
                                <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-user')?>"></use>
                              </svg>My Profile</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"><svg class="icon me-2">
                                <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-account-logout')?>"></use>
                              </svg>Logout</a></div>
                  </div></li>
      <li class="nav-title"></li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-speedometer')?>"></use>
          </svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="employee">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chart-line')?>"></use>
          </svg>
          Employee Sales
        </a>
      </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-cart')?>"></use>
            </svg>Sales</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="selling"><span class="nav-icon"></span> Selling</a></li>
            <li class="nav-item"><a class="nav-link" href="stok"><span class="nav-icon"></span> Stok</a></li>
          </ul>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>