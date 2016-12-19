<?php
class Model_users extends CI_Model
{
	
	
	public function register_insert($data){

		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('email');
		$this->db->from('test');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this-> db ->get();
			if($query->num_rows() == 0){

				$this-> db ->insert('test', $data);
				if($this->db->affected_rows() > 0){
					return true;
				}

				}else{
					return false;
				}

				$this->db->insert('users', $data);
			}

			//$this->load->database();
			//$this->db->insert('test', $data);


	//}


	function can_log_in()
	{
		$this -> db -> where('email', $this->input->post('email'));
		$this -> db -> where('password', ($this->input->post('password')));
		$query = $this -> db -> get('test');
		if($query -> num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	 public function getHall()
  	 {
  	 	$query =$this->db->get('hall');
  	 	return $query->result();
  	 }
  	     //change data sa database
    public function change(){

        $session_data = $this->session->userdata('logged_in');
        $query = $this-> db ->query("SELECT email FROM test WHERE 'email' = ".$this->session->userdata('email'));
        foreach ($query->result() as $my_info) {
            
            $db_password = $my_info->password;
            $db_email = $my_info->email;
        }

        if($this->input->post("oldpassword") == $db_password){

            $fixed_pw = mysql_real_escape_string($this->input->post("newpassword"));
            $update = $this-> db ->query("UPDATE test SET password = '$fixed_pw' WHERE email = '$db_email'")or die(mysql_error());
            $this->form_validation->set_message('change', '<div class="alert alert-success"><a href="#" class="close"data-dismiss="alert">&times;</a><strong>Password Updated!</strong></div>');
                return false;
        }else

        $this->form_validation->set_message('change', '<div class="alert alert-error"><a href="" class="close" data-dismiss="alert">&times;</a> <strong>Wrong Old Password!</strong> </div>');
            return false;
        
    }

}
?>