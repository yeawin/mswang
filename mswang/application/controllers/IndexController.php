<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $User = new Application_Model_Users();
        $user = $User->get_user(1);
        var_dump($user);
    }

    public function installAction()
    {
        // action body
    }


}



