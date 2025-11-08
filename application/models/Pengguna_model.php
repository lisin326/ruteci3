<?php 
class Pengguna_model extends CI_Model {
		public function authenticate_user_db($username, $password) {
			return $this->db->get_where('pengguna', 
			['username' => $username, 
			'password' => $password
            ])->row();
		}
	}
?>