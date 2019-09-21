<?php 

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index() {
        $this->load->view('v_login');
    }

    function action_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username, 
            'password' => $password
        );

        $cek = $this->m_login->cek_login("admin", $where)->num_rows();
        if($cek > 0) {
            $data_session = array(
                'nama' => $username, 
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("index.php/crud"));
        } else {
            echo "Username atau Password salah!";
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
    }
}