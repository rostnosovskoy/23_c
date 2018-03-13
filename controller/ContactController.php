<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 12.03.2018
 * Time: 23:21
 */

namespace controller;



use lib\Controller;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->model = new Message($this->getDB());
    }
    public function indexAction()
    {
        if (!@$_POST['send']){
            return null;
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $this->model->addMessege([$name, $email, $message]);
        $this->setFlash("Add messege");
        $this->redirect('/23/web/contact');
    }
}