# codeigniter3_phpmailer-library

## How to use
```
$this->load->library('mailsender'); //import library

$mail = $this->mailsender->newMail(); //create a new PHPMailer object

$mail->Subject('This is a subject'); //set subject
$mail->AddAddress('xxx@umutfirat.com'); //set "mailto" e-mail address
$mail->CharSet('UTF-8'); //set charset

$mail->MsgHTML('<div>This is a test e-mail</div>'); // set HTML email content

$this->mailsender->sendMail($mail); //sending mail via using mailsender library' sendmail function
```


## Setting SMTP Up

```
<?php 

class Mailsender
{
    public function __construct()
    {
        include_once APPPATH."third_party/PHPMailer/class.phpmailer.php";
        include_once APPPATH."third_party/PHPMailer/class.smtp.php";
    }

    public function load()
    {
        $objMail = new PHPMailer;
        return $objMail;
    }

    public function sendMail($mail)
    {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.xxx.com'; //Your smtp server 
        //$mail->SMTPDebug = 2; // Uncomment this line so you can open developer mode and see all bugs and answers
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->Username = ''; //Your mail address
        $mail->Password = ''; //Your mail password
        $mail->SetFrom($mail->Username, 'Your Name');

        $mail->Send();

    }
}

?>
```
