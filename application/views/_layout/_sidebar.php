<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">

        <!-- Must Filled with Image -->
        
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <li <?php if ($page == 'penjualan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Penjualan'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Penjualan</span>
        </a>
      </li>

      <li <?php if ($page == 'pembelian') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pembelian'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Data Pembelian</span>
        </a>
      </li>

      <li <?php if ($page == 'stockbarang') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('stockbarang'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Data Stock Barang</span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
