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
    public function process()
	{
		$uname = $this->input->post('username');
		$pass = $this->input->post('password');
		$upass = createPassword($pass);
		if ($this->mlogin->check_login($uname, $upass)) {
			if ($this->session->userdata('login_level')== 1 ) {
				redirect('iniadmin');
			}
			else{
				redirect('ini user');
			}
		}
		else {
			redirect('gagal');
		}
	}
	public function signout()
	{
		$this->session->unset_userdata('sess_user');
		redirect('login');
	}
}

?>