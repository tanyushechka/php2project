<?php
/**
 * Created by PhpStorm.
 * User: tagedo
 * Date: 05.05.2015
 * Time: 1:08
 */
namespace App\Classes;


class MyMailer
    extends \PHPMailer
{
    public $userlogin;
    public $message;
    public $view;
    public $path = '/exceptions/';

    public function __construct()
    {
        $this->view = new View();
    }


     public function sendMail() {
        date_default_timezone_set('Etc/UTC');
        $this->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $this->SMTPDebug = 0;
//Ask for HTML-friendly debug output
        $this->Debugoutput = 'html';
//Set the hostname of the mail server
        $this->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $this->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
        $this->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
        $this->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
        $this->Username = 'tagedo74@gmail.com';
//Password to use for SMTP authentication
        $this->Password = '***';
//Set who the message is to be sent from
        $this->setFrom('tagedo74@gmail.com', 'tagedo74');
//Set who the message is to be sent to
        $this->addAddress('tagedo@yandex.ru', '');
//Set the subject line
        $this->Subject = 'Confirmation of registration';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        $this->msgHTML(file_get_contents(__DIR__ . '/../views/admin/email.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
        $this->AltBody = 'Вы зарегистрированы на сайте';
//Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
        if (!$this->send()) {
            $this->view->message = 'Произошла ошибка при отправке сообщения.';
            //$this->view->message = ['message' => 'Произошла ошибка при отправке сообщения.' . $this->ErrorInfo];
            $this->view->display($this->path . 'exception.php');

        } else {
            $this->view->message = 'Сообщение отправлено';
            //$this->view->message = ['message' => 'Сообщение отправлено'];
            $this->view->display($this->path . 'exception.php');

        }
    }

}