<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('model_user');
    }

    # menampilkan halaman default di welcome message
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $data = array(
                    'username' => $this->input->POST('username', TRUE),
                    'password' => md5($this->input->POST('password', TRUE))
                    );

        $hasil = $this->model_user->cek_user($data);
        if ( $hasil->num_rows() == 1 ) {
            # cek login
            foreach ($hasil->result() as $data) {
                # code ...
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['user_id']   = $data->user_id;
                $sess_data['username']  = $data->username;
                $sess_data['level']     = $data->level;
                $this->session->set_userdata($sess_data);
            }

            if ( $this->session->userdata('level') == 'admin' ) {
                # kalo admin ke halaman admin
                redirect('admin/controller_admin');
            }elseif ( $this->session->userdata('level') == 'member' ) {
                # kalo member ke halaman member
                redirect('member/controller_member');
            }
        }else{
            # apabila username dan database tidak ada
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }



}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */