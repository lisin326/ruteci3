<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index() {
        $news = $this->Berita_model->get_all();
        $this->load->view('berita', ['news' => '$news']);
    }
}
?>