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
	
	function data2($number,$offset){
			return $query = $this->db->get("tb_donasi",$number,$offset)->result();		
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
		
		function edit_agendas($id ,$value)
		{
			$this->db->where('no_agenda', $id);
			$this->db->update('tb_agenda', $value);
		}
	
	public function getAllAdmin() {
		$query = $this->db->query('SELECT * FROM tb_admin');
        return $query->result();
	}
	
	public function getAgendaCount() {
		$this->db->from('tb_agenda');
		return $this->db->count_all_results();
	}
	public function getDonasiCount() {
		$this->db->from('tb_donasi');
		return $this->db->count_all_results();
	}
	
	function show_agenda($data){
		$this->db->select('*');
		$this->db->from('tb_agenda');
		$this->db->where('no_agenda', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
}

?>