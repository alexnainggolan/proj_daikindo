<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Daikin_core extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');
  }

    public function index(){
      $session = $this->session->userdata('status');

      if($session == '') {
        $this->load->view('login');
      } else {
        redirect('Home');
      }
    }


  public function proses_login(){
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if($this->form_validation->run() == TRUE) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $data = $this->M_user->pilihlogin($username, $password);

        if($data == false) {
          $this->session->set_flashdata('error_msg', 'Username /Password Anda Salah.');
          redirect('Daikin_core');
        } else {
          $session = [
            'userdata' => $data,
            'status' => "Loged in"
          ];
          $this->session->set_userdata($session);
          redirect('Home');
          }
        } else {
          $this->session->sess_destroy();
          redirect('Daikin_core');
        }
    }

    public function logout() {
      $this->session->sess_destroy();
      redirect('Daikin_core');
    }
}
?>
