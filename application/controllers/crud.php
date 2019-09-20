<?php 

class Crud extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index() {
        $data['users'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil', $data);
    }

    function tambah() {
        $this->load->view('v_input');
    }

    function tambah_action() {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama, 
            'alamat' => $alamat, 
            'pekerjaan' => $pekerjaan
        );

        $this->m_data->input_data($data, 'users');
        redirect('crud/index');
    }

    function edit($id) {
        $where = array('id' => $id);
        $data['users'] = $this->m_data->edit_data($where, 'users')->result();
        $this->load->view('v_edit', $data);
    }

    function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama, 
            'alamat' => $alamat, 
            'pekerjaan' => $pekerjaan
        );
        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'users');
        redirect('crud/index');
    }

    function hapus($id) {
        $where = array(
            'id' => $id
        );
        $this->m_data->hapus_data($where, 'users');
        redirect('crud/index');
    }
}