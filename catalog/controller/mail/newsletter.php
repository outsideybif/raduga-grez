<?php
class ControllerMailNewsletter extends Controller {
	public function index() {
        //print_r("test1");
        $data = [];
        
        $mail = new Mail($this->config->get('config_mail_engine'));
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
        $mail->smtp_username = $this->config->get('config_mail_smtp_username');
        $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
        $mail->smtp_port = $this->config->get('config_mail_smtp_port');
        $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

        $mail->setTo("penev.vladislav@gmail.com");
        $mail->setFrom("order@radugagrez.palemiya.com");
        $mail->setSender("Sender");
        $mail->setSubject("Subject");
        $mail->setHtml($this->load->view('mail/order_sended', $data));


        //print_r($mail);

        $mail->send();

        //print_r("test3");

        // Send to additional alert emails
        
		
	}
}
