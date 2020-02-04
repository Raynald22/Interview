<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todo extends CI_Controller
{
    public function index()
    {
        $data['todo'] = $this->model_todo->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('todo/todo', $data);
        $this->load->view('templates/footer', $data);
    }
    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama');

        $data = array(
            'nama'       => $nama
        );

        $this->model_todo->tambah_todo($data, 'todo');
        redirect('todo/todo');
    }

    public function edit($id)

    {
        $where = array('id' => $id);
        $data['todo'] = $this->model_todo->edit_todo($where, 'todo')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('todo/edit_todo', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id          = $this->input->post('id');
        $nama        = $this->input->post('nama');

        $data = array(
            'nama'       => $nama

        );

        $where = array(
            'id' => $id
        );

        $this->model_todo->update_data($where, $data, 'todo');
        redirect('todo/todo/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_todo->hapus_data($where, 'todo');
        redirect('todo/todo');
    }
}
