<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_member extends CI_Controller {

    public function __construct(){
        parent:: __construct();

        # apabila username kosong tidak dapat masuk page member
        if ( $this->session->userdata('username') == "" ) {
            # code...
            redirect('auth');
        }
        # apabila bukan member, dilarang masuk ke halaman member
        if ( $this->session->userdata('level') == "admin" ) {
            # code...
            redirect('admin/controller_admin');
        }
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('member/v_index', $data);
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('auth');
    }
}

/* End of file controller_member.php */
/* Location: ./application/controllers/member/controller_member.php */