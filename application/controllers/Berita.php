<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
        //$this->load->library('session'); //tidak perlu
    }

    public function index() {
        //ambil berita dari model
        $news = $this->Berita_model->get_all();
        $this->load->view('berita', ['news' => '$news']); //kirim ke view/berita.php
    }
}
    /** User mengakses (klik menu berita) atau index.php/welcome/berita, maka
     *  fungsi berita() menyatakan array news yg dikirim ke view.
     *  load menyambungkan ke model Berita_model, mengakses get_all() mengembalikan array
     *  array = simulasi data bukan database.
     *  index.php/welcome/berita maka akan memanggil Berita::index() ---lihat diatas
     */
    
?>