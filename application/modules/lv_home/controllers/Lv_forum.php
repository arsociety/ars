<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_forum extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Model arsociety
    } 
    public function index()
    {
        $this->load->view('forum/view_main');
    }

}

?>