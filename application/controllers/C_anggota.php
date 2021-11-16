<?php

class C_anggota extends CI_Controller{

    public function index(){
        $this->load->model('M_anggota');
        $isi['content'] = 'anggota/v_anggota';
        $isi['judul'] = 'Daftar Anggota';
        $isi['data'] = $this->M_anggota->get_data(); 
        $this->load->view('v_dashboard',$isi); 
    }

    public function tambah_anggota(){
        $this->load->model('M_anggota');
        $isi['content'] = 'anggota/v_form_anggota';
        $isi['judul'] = 'Form Tambah Anggota';
        $isi['id_anggota'] = $this->m_anggota->id_anggota();
        $this->load->view('v_dashboard',$isi); 
    }

    public function proses_tambah(){
		$this->load->model('M_anggota');
		$data = array(
			'id_anggota'=> $this->input->post('id_anggota'),
			'nama'=> $this->input->post('nama'),
			'jk'=> $this->input->post('jk'),
			'alamat'=> $this->input->post('alamat'),
            'no_hp'=> $this->input->post('no_hp')
			
		);
		$this->M_anggota->tambah_data($data);
		redirect('c_anggota/index');
	}

    public function edit($id){
        $this->load->model('M_anggota');

        $isi['content'] = 'anggota/v_edit';
        $isi['judul'] = 'Form Edit Anggota';
        $isi['data'] = $this->M_anggota->edit($id); 
        $this->load->view('v_dashboard',$isi); 
    }

    public function update(){
        $this->load->model('M_anggota');
        $id_anggota = $this->input->post('id_anggota');
        $data = array(
			'nama'=> $this->input->post('nama'),
			'jk'=> $this->input->post('jk'),
			'alamat'=> $this->input->post('alamat'),
            'no_hp'=> $this->input->post('no_hp')
        );
        $this->M_anggota->update($id_anggota,$data);
		redirect('c_anggota/index');
    }

    public function hapus($id){
		$this->load->model('M_anggota');
		$data= $this->M_anggota->hapus($id);
		redirect('c_anggota/index');
	}
    
}