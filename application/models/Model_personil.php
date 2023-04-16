<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_personil extends CI_Model
{
    public function all_data()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,leve_pusdatin.nama_level,personil_pusdatin.gambar FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
ORDER BY leve_pusdatin.id_level ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function data_it_suport()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE leve_pusdatin.id_level='1001';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_it_suport($id_personl)
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level,personil_pusdatin.gambar FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE personil_pusdatin.id_personil='$id_personl' AND personil_pusdatin.level=1001;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function data_eos_isp()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE leve_pusdatin.id_level='2002';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_eos_isp($id_personl)
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level,personil_pusdatin.gambar FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE personil_pusdatin.id_personil='$id_personl' AND personil_pusdatin.level=2002;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function data_drc()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE leve_pusdatin.id_level='3003';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_drc($id_personl)
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level,personil_pusdatin.gambar FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE personil_pusdatin.id_personil='$id_personl' AND personil_pusdatin.level=3003;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function data_umum()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE leve_pusdatin.id_level='4004';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_umum($id_personl)
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level,personil_pusdatin.gambar FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE personil_pusdatin.id_personil='$id_personl' AND personil_pusdatin.level=4004;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function data_cs()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE leve_pusdatin.id_level='5005';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_cs($id_personl)
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level,personil_pusdatin.gambar FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE personil_pusdatin.id_personil='$id_personl' AND personil_pusdatin.level=5005;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function data_magang()
    {
        $sql = "SELECT personil_pusdatin.id_personil,personil_pusdatin.nama,personil_pusdatin.tlpn,personil_pusdatin.alamat,leve_pusdatin.nama_level FROM `personil_pusdatin`
INNER JOIN leve_pusdatin
ON personil_pusdatin.level=leve_pusdatin.id_level
WHERE leve_pusdatin.id_level='6006';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
