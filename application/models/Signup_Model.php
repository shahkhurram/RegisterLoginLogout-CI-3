<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_Model extends CI_Model
{
    public function index($name, $email, $phone, $password)
    {
        $data = array(
            'Name' => $name,
            'Email' => $email,
            'Phone' => $phone,
            'Password' => md5($password)
        );
        $query = $this->db->insert('users', $data);
        if ($query) {
            $this->session->set_flashdata('success', 'Registration successfull, Now you can login.');
            redirect('signup');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            redirect('signup');
        }
    }
}