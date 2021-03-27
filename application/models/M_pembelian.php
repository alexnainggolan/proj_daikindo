<?php
defined('BASEPATH') OR exit ('No direct access allowed');

class M_pembelian extends CI_Model {

  public function get_pembelian() {

    $sql = "SELECT total_pembelian FROM pembelian_barang";
    $data = $this->db->query($sql);
    return $data->result();
  }

  public function total_rows() {
		$data = $this->db->get('pembelian_barang');

		return $data->num_rows();
	}
}
?>
