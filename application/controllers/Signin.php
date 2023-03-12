<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{

    function index()
    {

        // form validation---
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {

            // getting post values

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('Signin_Model');

          $validate =  $this->Signin_Model->index( $email, $password);
          if($validate){
                $this->session->set_userdata('uid', $validate->id);
                $this->session->set_userdata('email', $validate->email);


                redirect('welcome');
          }else{
                $this->session->set_flashdata('error', 'Please enter correct details');
                redirect('signin');
          }

        } else {
            $this->load->view('signin');
        }

    }
}
