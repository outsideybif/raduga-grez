<?php
class ControllerSubscribeSubscribe extends Controller {
	public function index() {
		
        $json = array();
        $json["status"] = "Sended";
        $email_to = $this->request->get['email'];

        $json["sendedMessage"] = $email_to;

        //$email_to = $this->config->get('config_email');

        $mail = new Mail();

        $mail->protocol = $this->config->get('config_mail_protocol');
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->hostname = $this->config->get('config_smtp_host');
        $mail->username = $this->config->get('config_smtp_username');
        $mail->password = $this->config->get('config_smtp_password');
        $mail->port = $this->config->get('config_smtp_port');
        $mail->timeout = $this->config->get('config_smtp_timeout');            
        //$mail->setTo($email_to);


        // $mail->setTo("info@granclos.com");
        // $mail->setFrom("info@granclos.com");
        // $mail->setSender("info@granclos.com");

        $mail->setTo("penev.vladislav@gmail.com");
        $mail->setFrom("info@blendstudio.palemiya.com");
        $mail->setSender("info@blendstudio.palemiya.com");
        $mail->setSubject("News");
        $mail->setText( $email_to );

        $mail->send();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }


	public function outstock() {
		
        $json = array();
        $json["status"] = "Sended";
        $email_to = $this->request->get['email'];
        $product_name = $this->request->get['name'];


        $json["sendedMessage"] = $email_to;

        //$email_to = $this->config->get('config_email');

        $mail = new Mail();

        $mail->protocol = $this->config->get('config_mail_protocol');
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->hostname = $this->config->get('config_smtp_host');
        $mail->username = $this->config->get('config_smtp_username');
        $mail->password = $this->config->get('config_smtp_password');
        $mail->port = $this->config->get('config_smtp_port');
        $mail->timeout = $this->config->get('config_smtp_timeout');            
        //$mail->setTo($email_to);


        // $mail->setTo("info@granclos.com");
        // $mail->setFrom("info@granclos.com");
        // $mail->setSender("info@granclos.com");

        $mail->setTo("penev.vladislav@gmail.com");
        $mail->setFrom("info@blendstudio.palemiya.com");
        $mail->setSender("info@blendstudio.palemiya.com");
        $mail->setSubject("News");
        $mail->setText( $email_to . " subscribe to " . $product_name );

        $mail->send();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }



	public function contact() {
		
        $json = array();
        $json["status"] = "Sended";
        $email_to = $this->request->get['email'];
        $name_to = $this->request->get['name'];
        $message_to = $this->request->get['message'];

        $json["sendedMessage"] = $email_to;

        //$email_to = $this->config->get('config_email');

        $mail = new Mail();

        $mail->protocol = $this->config->get('config_mail_protocol');
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->hostname = $this->config->get('config_smtp_host');
        $mail->username = $this->config->get('config_smtp_username');
        $mail->password = $this->config->get('config_smtp_password');
        $mail->port = $this->config->get('config_smtp_port');
        $mail->timeout = $this->config->get('config_smtp_timeout');            
        //$mail->setTo($email_to);


        // $mail->setTo("info@granclos.com");
        // $mail->setFrom("info@granclos.com");
        // $mail->setSender("info@granclos.com");

        $mail->setTo("penev.vladislav@gmail.com");
        $mail->setFrom("info@blendstudio.palemiya.com");
        $mail->setSender("info@blendstudio.palemiya.com");
        $mail->setSubject("News");
        $mail->setText( $email_to . " — " . $name_to . " — " . $message_to );

        $mail->send();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }


}
