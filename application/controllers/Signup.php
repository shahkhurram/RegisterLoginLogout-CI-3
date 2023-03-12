<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    function index()
    {

        // form validation---
        $this->form_validation->set_rules('name', 'Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[users.Email]|required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[6]|matches[password]');
        $this->form_validation->set_message('is_unique', 'this email is already exists');

        if ($this->form_validation->run()) {

            // getting post values

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');

            $this->load->model('Signup_Model');
            $this->Signup_Model->index($name, $email, $phone, $password);

        } else {
            $this->load->view('signup');
        }

    }
}
