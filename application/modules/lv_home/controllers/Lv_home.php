<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Model arsociety
    } 

    public function index()
    {
        $this->load->view('view_main');
    }

    public function order()
    {
        $this->load->view('view_order');
    }

    public function home()
    {
        $this->load->view('home/view_main');
    }

    public function forum()
    {
        $this->load->view('forum/view_main');
    }

    public function blog()
    {
        $this->load->view('blog/view_main');
    }

    public function sitemap()
    {
        $this->load->view('sitemap/view_main');
    }

    public function faq()
    {
        $this->load->view('faq/view_main');
    }

    public function maintenance()
    {
        $this->load->view('view_main_mt');
    }


}

?>