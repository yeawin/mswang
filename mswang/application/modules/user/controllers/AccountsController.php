<?php

class User_AccountsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->_helper->layout()->setLayoutPath(APPLICATION_PATH . "/layouts/scripts/");
        $this->_helper->layout()->setLayout('admin');
    }

    public function indexAction()
    {
        // action body
    }

    public function loginAction()
    {
        // action body
        $this->_helper->layout()->disableLayout();
    }

    public function listAction()
    {
        // action body
    }


}





