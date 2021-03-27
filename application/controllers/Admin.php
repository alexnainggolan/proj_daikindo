<?php
defined('BASEPATH') OR exit ('No direct access allowed');

class Admin extends CI_Controller {

  public function __construct() {

    parent::__construct();
    if($this->session->userdata('level') != 'admin')
    {
      redirect('daikin_core');
    }


    $this->load->model('m_user', 'user');

    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    

    $this->load->view('admin/header');
    $this->load->view('admin/dashboard');
    $this->load->view('admin/home');
    $this->load-view('admin/footer');
  }
}

?>
