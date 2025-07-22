<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlet extends CI_Controller {

    public function index(){
		$r ['atlet'] = $this->m_atlet->view_data()->result();
		$data = [
			'title' => 'Atlet'
		];
		$this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
		$this->load->view('atlet/v_atlet', $r);
        $this->load->view('layouts/footer');

	}

    public function createData()
    {
        $data = [
			'title' => 'Tambah Data Atlet'
		];
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
		$this->load->view('atlet/c_atlet');
        $this->load->view('layouts/footer');
    }

    public function saveData(){
        $ktp = $_FILES['ktp'];

        if ($ktp != ''){
            $config['upload_path'] = './assets/files';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 5120;
        
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('ktp')) {
            echo "File Gagal Diupload.";
            } else {
                $ktp = $this->upload->data('file_name');
        }

        }

        $kk = $_FILES['kk'];

        if ($kk != ''){
            $config['upload_path'] = './assets/files';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 5120;
        
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('kk')) {
            echo "File Gagal Diupload.";
            } else {
                $kk = $this->upload->data('file_name');
        }

        }
        
            $data = array(
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'ktp' => $ktp,
            'kk' => $kk,
            'cabor' => $this->input->post('cabor')
            );
    
            $this->m_atlet->input_data($data, 'tb_atlet');
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan.');
            redirect('atlet/index');
        // }

    }


    public function hapus($id)
    {
        $data = array ('id' => $id);
        $this->m_atlet->hapus_data($data, 'tb.atlet');
        redirect('atlet/index');
    }

    public function editData($id){

        $data = [
			'title' => 'Edit Data Atlet',
            'atlet' => $this->m_atlet->edit_data($id)
		];
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
		$this->load->view('atlet/u_atlet', $data);
        $this->load->view('layouts/footer');
    }

    public function updateData($id){
    // Ambil data lama untuk preserve file yang sudah ada
    $existing_data = $this->m_atlet->get_by_id($id); // Sesuaikan dengan method di model Anda
    
    // Inisialisasi dengan file lama
    $ktp = isset($existing_data->ktp) ? $existing_data->ktp : '';
    $kk = isset($existing_data->kk) ? $existing_data->kk : '';
    
    // Handle upload KTP
    if (!empty($_FILES['ktp']['name'])) {
        $config['upload_path'] = './assets/files/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 5120; // 2MB
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('ktp')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', 'File KTP gagal diupload: ' . $error);
            redirect('atlet/index');
            return;
        } else {
            // Hapus file lama jika ada
            if (!empty($existing_data->ktp) && file_exists('./assets/files/' . $existing_data->ktp)) {
                unlink('./assets/files/' . $existing_data->ktp);
            }
            $ktp = $this->upload->data('file_name');
        }
    }
    
    // Handle upload KK
    if (!empty($_FILES['kk']['name'])) {
        $config['upload_path'] = './assets/files/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 5120; // 2MB
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('kk')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', 'File KK gagal diupload: ' . $error);
            redirect('atlet/index');
            return;
        } else {
            // Hapus file lama jika ada
            if (!empty($existing_data->kk) && file_exists('./assets/files/' . $existing_data->kk)) {
                unlink('./assets/files/' . $existing_data->kk);
            }
            $kk = $this->upload->data('file_name');
        }
    }
    
    $data = array(
        'nama' => $this->input->post('nama'),
        'ttl' => $this->input->post('ttl'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'alamat' => $this->input->post('alamat'),
        'ktp' => $ktp,
        'kk' => $kk,
        'cabor' => $this->input->post('cabor')
    );
    
    // Update data dengan WHERE clause
    $this->db->where('id', $id);
    $result = $this->db->update('tb_atlet', $data);
    
    if ($result) {
        $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate.');
    }
    
    redirect('atlet/index');
}

}