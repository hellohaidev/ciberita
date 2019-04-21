<?php 

    class Users_model extends CI_Model {

        public function login_user($username,$password)
		{

			$this->db->where('username',$username);
			$result = $this->db->get('users_ci');
			$db_password = $result->row(3)->password;
			if (password_verify($password,$db_password)) {
					return $result->row(0)->id_users;
				}
			else {

					return false;

				}


		}


    }

?>