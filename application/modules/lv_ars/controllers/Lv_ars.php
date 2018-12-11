<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_ars extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("artikel");
	}

	public function index()
	{
		$data["artikel"] = $this->artikel->get_last_3();
		$this->load->view('home/view_main.php', $data);
		
	}


}

?>