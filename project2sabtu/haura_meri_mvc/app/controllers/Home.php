<?php
class Home extends Controller {
    public function index() 
    {
        $data['judul']='Dashboard';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}