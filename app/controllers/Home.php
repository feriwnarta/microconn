<?php

class Home extends Controller
{
    /**
     * controler default dari web microcon
     * controller ini akan menampilkan halaman home
     */
    public function index() {
        // data yang akan dibawa
        $data['title'] = 'Welcome To Microconn';

        // view home
        $this->view('templates/header', $data);
        $this->view('home/home');
        $this->view('templates/footer');
    }
}
