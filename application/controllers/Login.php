<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('Auth','Auth');
    }
    
	function index(){
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('login');
        }else{
            $url=base_url('dashboard');
            redirect($url);
        };
    }
    
    function autentikasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
                
        $validasi_username = $this->Auth->query_validasi_username($username);
        if($validasi_username->num_rows() > 0){
            $validate_ps=$this->Auth->query_validasi_password($username,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
                if($x['status']=='1'){
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('user',$username);
                    $id=$x['id'];
                    if($x['akses']=='1'){ //Superadmin
                        $name = $x['name'];
                        $akses = $x['akses'];
                        $this->session->set_userdata('access','Superadmin');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        $this->session->set_userdata('akses',$akses);
                        redirect('dashboard');

                    }else if($x['akses']=='2'){ //Admin
                        $name = $x['name'];
                        $akses = $x['akses'];
                        $this->session->set_userdata('access','Admin');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        $this->session->set_userdata('akses',$akses);
                        redirect('dashboard');

                    }
                }else{
                    $url=base_url('login');
                    echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
                    redirect($url);
                }
            }else{
                $url=base_url('login');
                echo $this->session->set_flashdata('msg','<div class="alert alert-dark alert-dismissible fade show mt-3" role="alert">
                Password salah!
              </div>');
                redirect($url);
            }

        }else{
            $url=base_url('login');
            echo $this->session->set_flashdata('msg','<div class="alert alert-dark alert-dismissible fade show mt-3" role="alert">
            Username salah!
          </div>');
            redirect($url);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }

}