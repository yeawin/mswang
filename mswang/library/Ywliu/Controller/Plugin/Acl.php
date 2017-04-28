<?php

class Ywliu_Controller_Plugin_Acl extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        //实例化Zend_Acl
        $acl = new Zend_Acl();
        //添加前台角色
        $acl->addRole('guest');                         //游客，不需要登陆
        $acl->addRole('administrator', 'guest');       //超级管理员
        
        
        
        //添加默认资源
        $acl->addResource('default-index');     //默认模块，默认控制器
        $acl->addResource('default-error');     //默认模块，错误控制器

        //添加管理模块资源
        $acl->addResource('admin-index');        //后台模块，默认控制器
        $acl->addResource('admin-subject');      //后台模块，栏目管理控制器

        
        //游客权限
        $acl->deny('guest', null, null);
        $acl->allow('guest', array('default-index', 'default-error'));       
        
        //管理用户权限
        $acl->allow('administrator', array('admin-index', 'admin-subject'), null);
       
               
        //当前用户
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            $identity = $auth->getIdentity();     
            $role = $identity->role;         
        } else {
            $role = 'guest';
        }
        $module = $request->getModuleName();        
        $controller = $request->getControllerName();
        $action = $request->getActionName();
        $resource = "{$module}-{$controller}";
        if ($acl->has($resource)){                       
            if(!$acl->isAllowed($role, $resource, $action)) {
                if ('guest' === $role) {
                    $request->setModuleName('user');
                    $request->setControllerName('accounts');
                    $request->setActionName('login');
                } else {
                    $request->setModuleName('default');
                    $request->setControllerName('error');
                    $request->setActionName('noauth');
                }
            }        
        } else {
            $request->setModuleName('default');
            $request->setControllerName('error');
            $request->setActionName('noauth');
        }
    }
}