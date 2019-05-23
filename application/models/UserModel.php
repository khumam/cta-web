<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function addUser()
    {

        $dataInsert = [
            'nama' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'pass' => md5($this->input->post('pass'))
        ];

        $insert = $this->db->insert('user', $dataInsert);

        return $insert ? true : false;
    }

    public function login()
    {

        $dataCheck = [
            'email' => $this->input->post('email'),
            'pass' => md5($this->input->post('pass'))
        ];

        $this->db->where($dataCheck);
        $login = $this->db->get('user');

        return $login == 1 ? true : false;
    }
}
