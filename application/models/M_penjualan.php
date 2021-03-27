<?php
defined('BASEPATH') OR exit ('No direct access allowed');

class M_penjualan extends CI_Model {

  public function get_penjualan() {
    $sql = "SELECT total_penjualan FROM penjualan_barang";
    $data = $this->db->query($sql);
    return $data->result();
  }
}
?>
