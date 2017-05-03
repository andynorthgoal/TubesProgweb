<?php
class Donasi extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model("donasi_m");
  }
  public function index(){
    $this->load->view('contribut');
  }

  public function add_data(){
    $this->load->view('form_add');
  }

  public function insert(){
    $no_hp          = $this->input->post('no_hp');
    $nama           = $this->input->post('nama');
    $email_donatur  = $this->input->post('email');
    $jumlah_donasi  = $this->input->post('jumlah_donasi');
    $no_agenda      = $this->input->post('no_agenda');

    $value = array(
      'no_pengirim' => $no_hp,
      'nama_donatur' => $nama,
      'email_donatur' => $email_donatur,
      'jumlah_donasi' => $jumlah_donasi,
      'no_agenda' => $no_agenda
    );

    $insert = $this->donasi_m->insert_donatur($value);
    if($insert){
      redirect('beranda/donasi');
    }
    else{
      echo "gagal";
    }
  }
}
?>
