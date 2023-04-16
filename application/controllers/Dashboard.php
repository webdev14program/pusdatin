<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {
        $isi['content'] = 'Admin/tampilan_home';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function it_support()
    {
        $isi['personil'] = $this->Model_personil->data_it_suport();
        $isi['content'] = 'Admin/it_support';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function simpan_it_suport()
    {
        $id_profil = rand(111111, 999999);
        $nama = $this->input->post('nama');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $nama = $this->input->post('status');

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'assets/upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            // redirect('Admin/data_testimoni');
        }

        $data = array(
            'id_personil' => $id_profil,
            'nama' => $this->input->post('nama'),
            'tlpn' => $tlpn,
            'alamat' => $alamat,
            'level' => 1001,
            'gambar' => $gambar
        );

        $this->db->insert('personil_pusdatin', $data);
        redirect('Dashboard/it_support');
    }

    public function detail_it_suport($id_personl)
    {
        $isi['personil'] = $this->Model_personil->detail_it_suport($id_personl);
        $isi['content'] = 'Admin/detail_it_suport';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function eos_isp()
    {
        $isi['personil'] = $this->Model_personil->data_eos_isp();
        $isi['content'] = 'Admin/eos_isp';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function simpan_eos_isp()
    {
        $id_profil = rand(111111, 999999);
        $nama = $this->input->post('nama');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $nama = $this->input->post('status');

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'assets/upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            // redirect('Admin/data_testimoni');
        }

        $data = array(
            'id_personil' => $id_profil,
            'nama' => $this->input->post('nama'),
            'tlpn' => $tlpn,
            'alamat' => $alamat,
            'level' => 2002,
            'gambar' => $gambar
        );

        $this->db->insert('personil_pusdatin', $data);
        redirect('Dashboard/eos_isp');
    }

    public function detail_eos_isp($id_personl)
    {
        $isi['personil'] = $this->Model_personil->detail_eos_isp($id_personl);
        $isi['content'] = 'Admin/detail_eos_isp';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function drc()
    {
        $isi['personil'] = $this->Model_personil->data_drc();
        $isi['content'] = 'Admin/drc';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function simpan_drc()
    {
        $id_profil = rand(111111, 999999);
        $nama = $this->input->post('nama');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $nama = $this->input->post('status');

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'assets/upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            // redirect('Admin/data_testimoni');
        }

        $data = array(
            'id_personil' => $id_profil,
            'nama' => $this->input->post('nama'),
            'tlpn' => $tlpn,
            'alamat' => $alamat,
            'level' => 3003,
            'gambar' => $gambar
        );

        $this->db->insert('personil_pusdatin', $data);
        redirect('Dashboard/drc');
    }

    public function detail_drc($id_personl)
    {
        $isi['personil'] = $this->Model_personil->detail_drc($id_personl);
        $isi['content'] = 'Admin/detail_drc';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function urusan_umum()
    {
        $isi['personil'] = $this->Model_personil->data_umum();
        $isi['content'] = 'Admin/urusan_umum';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function simpan_umum()
    {
        $id_profil = rand(111111, 999999);
        $nama = $this->input->post('nama');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $nama = $this->input->post('status');

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'assets/upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            // redirect('Admin/data_testimoni');
        }

        $data = array(
            'id_personil' => $id_profil,
            'nama' => $this->input->post('nama'),
            'tlpn' => $tlpn,
            'alamat' => $alamat,
            'level' => 6006,
            'gambar' => $gambar
        );

        $this->db->insert('personil_pusdatin', $data);
        redirect('Dashboard/urusan_umum');
    }

    public function detail_umum($id_personl)
    {
        $isi['personil'] = $this->Model_personil->detail_umum($id_personl);
        $isi['content'] = 'Admin/detail_umum';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function cs()
    {
        $isi['personil'] = $this->Model_personil->data_cs();
        $isi['content'] = 'Admin/cs';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function simpan_cs()
    {
        $id_profil = rand(111111, 999999);
        $nama = $this->input->post('nama');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $nama = $this->input->post('status');

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'assets/upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            // redirect('Admin/data_testimoni');
        }

        $data = array(
            'id_personil' => $id_profil,
            'nama' => $this->input->post('nama'),
            'tlpn' => $tlpn,
            'alamat' => $alamat,
            'level' => 5005,
            'gambar' => $gambar
        );

        $this->db->insert('personil_pusdatin', $data);
        redirect('Dashboard/cs');
    }

    public function detail_cs($id_personl)
    {
        $isi['personil'] = $this->Model_personil->detail_cs($id_personl);
        $isi['content'] = 'Admin/detail_cs';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function magang()
    {
        $isi['personil'] = $this->Model_personil->data_magang();
        $isi['content'] = 'Admin/magang';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function simpan_magang()
    {
        $id_profil = rand(111111, 999999);
        $nama = $this->input->post('nama');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $nama = $this->input->post('status');

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'assets/upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            // redirect('Admin/data_testimoni');
        }

        $data = array(
            'id_personil' => $id_profil,
            'nama' => $this->input->post('nama'),
            'tlpn' => $tlpn,
            'alamat' => $alamat,
            'level' => 6006,
            'gambar' => $gambar
        );

        $this->db->insert('personil_pusdatin', $data);
        redirect('Dashboard/magang');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/Auth');
    }
}
