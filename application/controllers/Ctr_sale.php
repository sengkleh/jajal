<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctr_sale extends CI_Controller {

	function __construct(){
		parent :: __construct();
		//fungsi sebelum login difolder helper
		check_not_login();
		$this->load->model('Mdl_sale');
        
	}

	//proses stock menggunakan pemanggilan router
	public function index(){
		$this->load->model('Mdl_costumer');

		$costumer = $this->Mdl_costumer->get()->result();
		$data = array(
			'costumer' => $costumer,
			'invoice'  => $this->Mdl_sale->invoice_no(),
		);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('template/transaction/sale/sale_data', $data);
		$this->load->view('template/footer');
	}
}