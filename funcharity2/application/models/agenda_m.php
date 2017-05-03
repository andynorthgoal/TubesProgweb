<?php 
 
class agenda_m extends CI_Model{	
	function construct()
		{
			parent:: construct();
			$this->load->library('input');
			$this->load->library('form_validation');
		}

	public function insert_agenda($value){
		$result = $this->db->insert("tb_agenda",$value);
		return $result;
	}
	
	function data($number,$offset){
			return $query = $this->db->get("tb_agenda",$number,$offset)->result();		
		}
	
	function jumlah_data(){
			return $this->db->get("tb_agenda")->num_rows();
	}
	
	public function delete_agenda($no_agenda){

			$data = array(
				'no_agenda' => $no_agenda
				);
			$even = $this->db->delete("tb_agenda",$data);

			return $even;
		}
		
		function edit_agenda($value ,$where)
		{
			$this->db->where($where);
			$even = $this->db->update("tb_agenda",$value);
			return $even;
		}
	
	
}

?>