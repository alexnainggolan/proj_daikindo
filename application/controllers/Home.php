<?php
defined('BASEPATH') OR exit("No direct access allowed");

class Home extends Core_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('M_pembelian');
    $this->load->model('M_penjualan');
    $this->load->model('M_stockbarang');
  }

  public function index() {

    //$data['data_pembelian'] = json_encode($data_pembelian);
    //$data['data_penjualan'] = json_encode($data_penjualan);
    //$data['data_stockbarang'] = json_encode($data_stockbarang);

    $data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data CRUD";
		$this->template->views('home', $data);
  }
}
?>
