<?php

class Donasi_m extends CI_Model{

  public function insert_donatur($value){
    $result = $this->db->insert("tb_donatur",$value);
    return $result;
  }

	function get_donatur($table){
		$this->db->select("*");
		$this->db->from("tb_donatur");
		$data = $this->db->get();

		return $data->result();
  }

  public function Update($table, $where){
    $res = $this->db->update($table, $data, $where);
    return $res;
  }

  public function deletes($table, $where){
		$res = $this->db->delete($delete, $where);
		return $res;
	}
}
?>
