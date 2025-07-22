<?php

class M_atlet extends CI_Model{
    public function view_data()
    {
        return $this->db->get('tb_atlet');

    }
    public function input_data($data){
 		$this->db->insert('tb_atlet', $data);
    }

    public function hapus_data($data){
        $this->db->delete('tb_atlet', $data);
    }

    public function edit_data($id){
        $this->db->select('*');
        $this->db->from('tb_atlet');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function update_data($data, $id) {
    $this->db->where('id', $id);
    return $this->db->update('tb_atlet', $data);
}

    public function get_by_id($id) {
    return $this->db->get_where('tb_atlet', array('id' => $id))->row();
}
}