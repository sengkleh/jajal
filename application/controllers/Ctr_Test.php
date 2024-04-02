<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctr_Test extends CI_Controller {
    function __construct(){
		parent :: __construct();
		//fungsi sebelum login difolder helper
		check_not_login();
		user_login();

	}
	//proses item
	public function index(){


		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('template/Test');
		$this->load->view('template/footer');
	}

}
