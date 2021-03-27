<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Core_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('M_karyawan');

    $this->userdata = $this->session->userdata('userdata');
    $this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));
    if($this->session->userdata('status') == '') {
      redirect('Daikin_core');
    }

  }

  public function updateProfil(){
    if($this->userdata != '') {
      $data = $this->M_karyawan->select($this->userdata->id);
      $this->session->set_userdata('userdata', $data);
      $this->userdata = $this->session->userdata('userdata');
    }
  }
}
?>
