<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    } 
    public function index()
    {
        $this->load->view('view_main');
    }

}

?>