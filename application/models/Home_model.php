<?php

class Home_model extends CI_Model
{
    public function getDataKasus()
    {
        $data_kasus = file_get_contents('https://indonesia-covid-19.mathdro.id/api');
        $data_kasus = json_decode($data_kasus);
        return $data_kasus;
    }
}
