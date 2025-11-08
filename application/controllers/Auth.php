<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->library('session');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Pengguna_model->authenticate_user_db($username, $password);

        if ($user) {
            $this->session->set_userdata('user', $user->username);
            echo "Login berhasil";
            $this->session->set_userdata('username', $user->username);  //sesi username = object$user.username
            redirect('apps/home');
        } else {
            //echo "Login gagal";
            //$this->session->set_userdata('login_error', 'Username atau password salah');
            $this->session->set_flashdata('login_error', 'Username atau password salah');
            //redirect('welcome');
            redirect('apps/show_login_page');
        }
        var_dump($this->Pengguna_model); exit;
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('apps');
    }
}

?>