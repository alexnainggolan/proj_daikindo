<?php
  $uri = $this->uri->segment(2);
?>
<aside class="main-sidebar">
    <section class=sidebar>
      <div class="user-panel">
        <div class="pull-left image">
          <img>
        </div>
        <div class="info" style="margin-top:13px">
          <p><?=strtoupper($this->session->nama); ?></p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Navigation</li>
        <li class="menu-open">
          <a href="<?=base_url('manager')?>">
            <i class="fa fa-home"></i><span>Home</span>
          </a>
        </li>
        <li class="">
          <a href="<?=base_url('manager/data_barang');?>">
            <i class="fa fa-cube"></i><span>Data Barang</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i>
            <span>Rekap dan Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?=base_url('manager/laporan_bulanan')?>">
                <i class="fa fa-caret-right"></i>
                Laporan Bulanan
              </a>
            </li>
            <li>
              <a href="<?=base_url('manager/rekap_barang') ?>">
                <i class="fa fa-caret-right"></i>
                Rekap Barang
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Master Data User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?=base_url('manager/data_karyawan')?>">
                <i class="fa fa-caret-right"></i>
                Data Karyawan
              </a>
            </li>
            <li>
              <a href="<?=base_url('manager/data_pembeli')?>">
                <i class="fa fa-caret-right"></i>
                Data Pembeli
              </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="<?=base_url('auth/logout'); ?>">
            <i class="fa fa-sign-out-alt"></i><span>Keluar</span>
          <a/>
        </li>
      </ul>
    </section>
</aside>
