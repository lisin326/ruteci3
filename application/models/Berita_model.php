<?php
class Berita_model extends CI_Model {
    public function get_all(){
        return $this->db->get('berita')->result_array();
    }
}

?>