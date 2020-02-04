<?php

class Model_todo extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('todo');
    }

    public function tambah_todo($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_todo($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('todo');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
