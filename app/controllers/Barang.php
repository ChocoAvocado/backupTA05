<?php

class Barang extends Controller{
    public function index()
    {
        $data['judul'] = 'Barang';
        $this->view('templates/header',$data);
        $this->view('webadmin/barang/index');
        $this->view('templates/footer');
    }
}