<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatih extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Pelatih'
		];
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
		$this->load->view('pelatih/v_pelatih');
        $this->load->view('layouts/footer');

	}


}
