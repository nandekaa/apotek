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
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $data['title'] = 'Apotek User Registration';
            $this->load->view('auth/_partials/head.php', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/_partials/footer.php');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['role_id'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name']
                    ];
                    $this->session->set_userdata($data);
                    redirect('superadmin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password!
                  </div>');
                    redirect('auth');
                }
            } else {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password!
                  </div>');
                    redirect('auth');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered!
          </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('txtnama', 'Name', 'required|trim');
        $this->form_validation->set_rules('txtuser', 'Username', 'required|trim|min_length[5]|is_unique[user.username]', [
            'is_unique' => 'This username has already registered!'
        ]);
        $this->form_validation->set_rules('txthp', 'Nomor Handphone', 'required|trim|numeric');
        $this->form_validation->set_rules('txtpass', 'Password', 'required|trim|min_length[6]|matches[txtrepass]', [
            'matches' => 'Password doesnt match!',
            'min_length' => 'Password too short!',
        ]);
        $this->form_validation->set_rules('txtrepass', 'Password', 'required|trim|matches[txtpass]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Apotek User Registration';
            $this->load->view('superadmin/_partials/head.php', $data);
            $this->load->view('superadmin/pharmacist.php');
            $this->load->view('superadmin/_partials/footer.php');
        } else {
            $data = [

                'name' => htmlspecialchars($this->input->post('txtnama', true)),
                'username' => htmlspecialchars($this->input->post('txtuser', true)),
                'nohp' => $this->input->post('txthp'),
                'password' => password_hash($this->input->post('txtpass'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation your account has been created. Please Login!
          </div>');
            redirect('auth');
        }
    }
}
