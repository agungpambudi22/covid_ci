<?php

class Daerah_model extends CI_Model
{
    public function getAllNamaDaerah()
    {
        $data_nama_daerah = file_get_contents('https://indonesia-covid-19.mathdro.id/api/provinsi');
        $data_nama_daerah = json_decode($data_nama_daerah);
        $data_nama_daerah = $data_nama_daerah->data;
        return $data_nama_daerah;
    }

    public function getDataPerDaerah()
    {
    }
}
