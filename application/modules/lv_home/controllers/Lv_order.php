<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_order extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Model arsociety
    }

    public function personal()
    {
        $this->load->view('order/view_personal');
    }
    public function konfirmasi()
    {
        $this->load->view('order/view_konfirmasi');
    }
    public function pembayaran()
    {
        $this->load->view('order/view_pembayaran');
    }
}

?>
