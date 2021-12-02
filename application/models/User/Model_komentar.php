<?php
class Model_komentar extends CI_Model
{
    function Is_already_register($id)
    {
        $this->db->where('email', $id);
        $query = $this->db->get('akun1');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Update_user_data($data, $id)
    {
        $this->db->where('id_akun', $id);
        $this->db->update('akun1', $data);
    }

    function Insert_user_data($data)
    {
        $this->db->insert('akun1', $data);
    }

    
}
