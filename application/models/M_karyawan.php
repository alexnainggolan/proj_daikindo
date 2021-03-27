<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_karyawan extends CI_Model {

  public function ceklogin ($data, $id)
  {
    $this->db->where("id", $id);
    $this->db->update("m_user", $data);
    return $this->db->affected_rows();
  }

  public function pilih($id = '') {
    if($id != '') {
      $this->db->where('id', $id);
    }

    $data = $this->db->get('m_user');
    return $data->row();
  }
}
?>
