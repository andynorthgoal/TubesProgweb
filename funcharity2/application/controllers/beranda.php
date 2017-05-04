<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class beranda extends CI_Controller{

  function __construct(){
		parent:: __construct();
		$this->load->model('agenda_m');
		$this->load->helper('url');
	}

  public function index(){
      $this->load->view('Welcome Message');
      $this->load->helper('url');
  }

  public function home(){
		$this->load->database();
		$jumlah_data = $this->agenda_m->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/beranda/home/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['agenda'] = $this->agenda_m->data($config['per_page'],$from);
		$this->load->view('index',$data);
  }

  public function donasi(){
	  $this->load->database();
		$jumlah_data = $this->agenda_m->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/beranda/home/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['agenda'] = $this->agenda_m->data($config['per_page'],$from);
	  $this->load->view('donasi',$data);
  }

  public function aboutus(){
      $this->load->view('aboutus');
  }
  
public function detail($no_agenda){
	$id = $this->uri->segment(3);
	$data['detail_agenda'] = $this->agenda_m->show_agenda($no_agenda);
	$this->load->view('detail',$data);
	}
	
	public function contribut(){
		$this->load->view('contribut');
	}
}

?>
