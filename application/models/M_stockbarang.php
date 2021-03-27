<?php
defined('BASEPATH') OR exit ("No direct script access allowed");

class M_stockbarang extends CI_Model {

  public function get_stock() {
    $sql = "SELECT stok_akhir FROM stock_barang ";
    $data = $this->db->query($sql);
    return $data->result();
  }
}
?>
