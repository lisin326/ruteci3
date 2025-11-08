<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

	public function index(){
		$this->load->view('login');
	}

	public function home() {
		if ($this->session->userdata('username')) {
			$this->load->view('menu');
			$this->load->view('home');
			$this->load->view('footer');
		} else {
			redirect('apps');
		}
	}

	public function berita() {
		if ($this->session->userdata('username')) {
			$this->load->view('menu');
			$news = [
				['judul' => 'Pemprograman Semantic', 'tanggal' => '2025-11-07'],
				['judul' => 'Belajar Web PHP, arsitektur Model-View-Controller(MVC) dengan CI', 'tanggal' => '2025-11-06'],
				['judul' => 'Database MySQL dengan pemodelan data di CodeIgniter3', 'tanggal' => '2025-11-05'],
				['judul' => 'Routing atau Automatic Routing pada CI', 'tanggal' => '2025-11-04'],
				['judul' => 'Session menggunakan userdata/set_userdata/unset_userdata cocok untuk sesi login pengguna', 'tanggal' => '2025-11-03'],
				['judul' => 'Session menggunakan set_flashdata, sesi sekali tampil dan otomatis sesi terhapus cocok untuk pesan/error_message', 'tanggal' => '2025-11-009'],
			];
			//$this->load->view('berita');
			$this->load->view('berita', ['news' => $news]);
			$this->load->view('footer');
		} else {
			redirect('apps');
		}
	}

	public function show_login_page() {
        //$error = $this->session->userdata('login_error') ?? null;$this->session->unset_userdata('login_error');
		$error = $this->session->flashdata('login_error') ?? null;
        $this->load->view('login', ['error' => $error]);
    }

	public function dashboard() {
		$name = $this->session->userdata('username');
		$this->load->view('dashboard', ['name' =>'$name']);
	}
}
