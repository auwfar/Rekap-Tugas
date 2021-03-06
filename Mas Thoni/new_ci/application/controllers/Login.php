<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index() {
		$this->check_login();
		
		$this->load->view('login');
	}

	public function act_login() {
		$this->check_login();

		$param 	= $this->input->post();
		$proses = $this->M_login->act_login($param);

		if (count($proses) > 0) {
			$this->session->set_userdata('user_session', $proses);
			$this->session->set_flashdata('alert_msg', succ_msg('user berhasil login'));

			redirect('Dashboard');
		} else {
			$this->session->set_flashdata('alert_msg', err_msg('user gagal login'));

			redirect('Login');
		}
	}

	public function act_logout() {
		$this->session->sess_destroy();

		redirect('Login');
	}

	public function check_login() {
		$this->user_login = $this->session->userdata('user_session');

		if (count($this->user_login) > 0) {
			redirect('Dashboard');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */