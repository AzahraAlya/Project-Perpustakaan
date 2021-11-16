<?php

class M_anggota extends CI_Model{

    public function id_anggota(){
        $this->db->select('RIGHT(anggota.id_anggota,3) as kode', FALSE);
        $this->db->order_by('id_anggota', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('anggota');

        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "AB".$kodemax;
        return $kodejadi;
    }

    public function tambah_data($data){
        $this->db->insert('anggota', $data);
    }

    public function get_data(){
        return $this->db->get('anggota')->result();
    }

    public function edit($id){
        return $this->db->get_where('anggota', ['id_anggota'=>$id])->row();
    }

    public function update($id_anggota , $data){
        $this->db->update('anggota',$data, ['id_anggota'=>$id_anggota]);
    }

    public function hapus($id){
        $this->db->delete('anggota',['id_anggota'=>$id]);
    }
}