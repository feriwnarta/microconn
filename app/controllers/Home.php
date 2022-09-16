<?php

class Home extends Controller
{
    /**
     * controler default dari web microcon
     * controller ini akan menampilkan halaman home
     */
    public function index()
    {
        session_start();
        // data yang akan dibawa
        $data['title'] = 'Welcome To Microconn';
        $emailServices = $this->model('EmailModel');
        // view home

        $this->view('templates/header', $data);
        if (isset($_POST['status'])) {
            $result =  $_POST['status'];
            $rs = $emailServices->decrypt($result);
            if ($rs == 1) {
                echo '
                <div class="alert alert-success alert-dismissible" style="margin-top : 108px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success</strong> Send Email.
                </div>

                <script>
                window.onload = function() {
                    history.replaceState("", "", "/microconn/");
                }
                </script>
              ';
            }
        }
        $this->view('home/home');
        $this->view('templates/footer');
    }
}
