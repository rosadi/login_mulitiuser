<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {


    public function cek_user($data)
    {
        return $this->db->get_where('login_session', $data);
    }
    

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */