<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct() {

    parent::__construct();
    if($this->session->userdata('level')!='admin')
    {
      redirect('daikin_core');
    }
    $this->load=>model('m_user', 'user');
  }

  public function index()
  {
    if ($this->session->level)
    {
      redirect('admin');
    }
  }
}
?>
