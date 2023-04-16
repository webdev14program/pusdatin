<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $isi['personil'] = $this->Model_personil->all_data();
        $this->load->view('templates/header');
        $this->load->view('tampilan_home', $isi);
        $this->load->view('templates/footer');
    }
}
