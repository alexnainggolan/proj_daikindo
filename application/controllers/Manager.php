<?php
defined('BASEPATH') OR exit('No direct script asccess allowed');

class Manager extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('jabatan')!= 'manager')
    {
      redirect('daikin_core');
    }
    $this->load->library('pdf_report');
    $this->load->model('m_karyawan', 'user');
    $this->load->model('m_barang','barang');

    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $this->load->view('manager/header');
    $this->load->view('manager/dashboard');
    $this->load->view('manager/home', $data);
    $this->load->view('manager/footer');
  }
}
?>
