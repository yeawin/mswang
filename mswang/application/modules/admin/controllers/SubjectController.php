<?php

class Admin_SubjectController extends Zend_Controller_Action
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

    public function listAction()
    {
        // action body
    }


}



