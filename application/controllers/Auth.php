<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function index()
	{
		$this->load->view("login");
    }
    public function prosess()
    {
       $post = $this->input->post(null,TRUE);
       if(isset($post['login'])){
           $this->load->model('m_login');
           $query=$this->m_login->login($post);
           if($query->num_rows() > 0){
               $row=$query->row();
               $params=array(
                   'userid'=>$row->user_id,
                   'level'=>$row->level
               );
               $this->session->set_userdata($params);
               echo"<script>
                    alert('Selamat, Login Berhasil');
                    window.location='".site_url('admin')."';
                    </script>";
           }
           else{
            echo"<script>
            alert('Maaf, Login Gagal');
            window.location='".site_url('auth')."';
            </script>";
           }
       }
      
    }
    public function logout(){
        $this->session->sess_destroy();
        $url=base_url('auth');
        redirect($url);
    }
}
