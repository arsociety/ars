<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_ars extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home/view_main.php');
	}


}

?>