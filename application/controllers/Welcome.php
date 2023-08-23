<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function sendMail()
    {
        $this->load->library('mailsender');

        $mail = $this->mailsender->newMail();

        $mail->CharSet = "UTF-8";
        $mail->Subject = "Subject";
        $mail->AddAddress($this->input->post('userMail'));
        $mail->MsgHTML("<div>This is a test e-mail</div>");

        $this->mailsender->sendMail($mail);
    }
}
