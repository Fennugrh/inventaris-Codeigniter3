<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('layouts/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('layouts/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //success
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                    redirect('auth/');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth/');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('layouts/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('layouts/auth_footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'name' => $this->input->post('name'),
                'role_id' => 2,
                "date_created" => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has ben created!</div>');
            redirect('auth/');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth/');
    }
}
