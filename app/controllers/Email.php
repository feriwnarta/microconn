<?php


include('app/views/templates/header.php');
include('app/views/templates/footer.php');

class Email extends Controller
{
    public function sendEmail()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $emailServices = $this->model('EmailModel');
            $emailServices->sendEmail($email);
            $error = '<div class="alert alert-success alert-dismissible" style="margin-top: 108px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Indicates a successful or positive action.
          </div>';
          echo $error;
        //   header('Location: http://localhost/microconn/');  
        } else {
            $error = '<script>alert("gagal mengirim email")</script>';
            echo $error;
        }
    }
}
