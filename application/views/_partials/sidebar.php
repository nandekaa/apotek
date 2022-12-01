<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <img class="sidebar-brand-full" width="50" height="45" src="<?php echo base_url('assets/brand/logo.png')?>">
      <h6 class="sidebar-brand-full">Apotek Sugihwaras</h6>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-title"></li>
        <li class="nav-item row"><span class="nav-item mx-5 col-5">
        <?php echo $this->session->userdata('name'); ?><br><span class="text-warning"><?php echo $this->session->userdata('access'); ?></span></span><div class="dropdown col-2">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-options')?>"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><svg class="icon me-2">
                                <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-user')?>"></use>
                              </svg>My Profile</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo site_url('login/logout');?>"><svg class="icon me-2">
                                <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-account-logout')?>"></use>
                              </svg>Logout</a></div>
                  </div></li>
      <li class="nav-title"></li>
      <?php if($this->session->userdata('access')=='Superadmin'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="dashboard">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-speedometer')?>"></use>
          </svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="obat">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-storage')?>"></use>
          </svg>
          Master Obat
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="income">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-newspaper')?>"></use>
          </svg>
          Pemasukan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-graph')?>"></use>
          </svg>
          Laporan Penjualan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pharmacist">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-people')?>"></use>
          </svg>
          Pegawai
        </a>
      </li>
      <?php } if($this->session->userdata('access')=='Admin'){ ?>
        <li class="nav-item">
        <a class="nav-link" href="dashboard">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-speedometer')?>"></use>
          </svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sales">
          <svg class="nav-icon">
            <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chart-line')?>"></use>
          </svg>
          Laporan Penjualan
        </a>
      </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-cart')?>"></use>
            </svg>Produk</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="selling"><span class="nav-icon"></span> Penjualan</a></li>
            <li class="nav-item"><a class="nav-link" href="obat"><span class="nav-icon"></span> Stok</a></li>
          </ul>
        </li>
        <?php }; ?>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>