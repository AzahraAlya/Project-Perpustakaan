<?php

class C_Dashboard extends CI_Controller{
    public function index(){
        $isi['content'] = 'v_home';
        $isi['judul'] = 'Dashboard';
        $this->load->view('v_dashboard',$isi); 
    }
}