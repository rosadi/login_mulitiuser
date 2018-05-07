<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_admin extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();

        # apabila username kosong tidak dapat masuk ke page admin
        if ( $this->session->userdata('username') == "" ) {
            # code ..
            redirect('auth');
        }

        # apabila bukan admin dilarang masuk ke halaman admin
        if ( $this->session->userdata('level') == "member" ) {
            # code ...
            redirect('member/controller_member');
        }
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');   
        $this->load->view('admin/v_index', $data);    
    }

     public function logout()
     {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('auth');
    }

}

/* End of file controller_admin.php */
/* Location: ./application/controllers/admin/controller_admin.php */