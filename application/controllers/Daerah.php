<?php

class Daerah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Daerah_model');
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['daerah'] = $this->Daerah_model->getAllNamaDaerah();
        $data['kasus'] = $this->Home_model->getDataKasus();
        $data['judul'] = 'Data Covid PerProvinsi';
        $this->load->view('templates/header', $data);
        $this->load->view('daerah/index', $data);
        $this->load->view('templates/footer');
    }
}
