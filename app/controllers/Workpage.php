<?php

class Workpage extends Controller
{
    public function index()
    {
        $data['title'] = 'Welcome To Microconn';
        $this->view("templates/header", $data);
        $this->view("workpage/workpage");
        $this->view("templates/footer");
    }
}
