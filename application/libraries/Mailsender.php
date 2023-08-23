<?php 

class Mailsender
{
    public function __construct()
    {
        include_once APPPATH."third_party/PHPMailer/class.phpmailer.php";
        include_once APPPATH."third_party/PHPMailer/class.smtp.php";
    }

    public function newMail()
    {
        $objMail = new PHPMailer;
        return $objMail;
    }

    public function sendMail($mail)
    {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.your_smtp_server.com';
        //$mail->SMTPDebug = 2;
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'sender_email';
        $mail->Password = 'password';
        $mail->SetFrom($mail->Username, 'Nickname');

        $mail->Send();

    }
}

?>