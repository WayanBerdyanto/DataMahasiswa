<?php

class About extends Controller{
    public function index($nama="Wayan", $pekerjaan="Mahasiswa"){
        $data['judul']='About Index'; //<-- Menambahkan Judul
        $data['nama']= $nama;
        $data['pekerjaan']= $pekerjaan;
        $this->view('templates/header', $data);//Ditambahkan
        $this->view('about/index', $data);
        $this->view('templates/footer');//Ditambahkan
        
    }
    public function page(){
        $data['judul']='About Page'; //<-- Menambahkan Judul
        $this->view('templates/header', $data);//Ditambahkan
        $this->view('about/page');
        $this->view('templates/footer');//Ditambahkan
        
    }
}