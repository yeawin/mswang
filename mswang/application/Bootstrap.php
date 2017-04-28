<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initNavigation()
    {
        $pages = array(
            array(
                'label' => '栏目管理',
                'uri' => '#',
                'fa' => 'fa fa-columns',
                'nav_li_class' => 'treeview',
                'pages' => array(
                    array(
                        'label' => '栏目列表',
                        'uri' => '/admin/subject/list',
                    ),
                ),
            ),
            array(
                'label' => '内容管理',
                'uri' => '#',
                'fa' => 'fa fa-file-text',
                'nav_li_class' => 'treeview',
                'pages' => array(
                    array(
                        'label' => '内容列表',
                        'uri' => '#',
                    ),
                ),
            ),
            array(
                'label' => '权限管理',
                'uri' => '#',
                'fa' => 'fa fa-key',
                'nav_li_class' => 'treeview',
                'pages' => array(
                    array(
                        'label' => '用户管理',
                        'uri' => '/user/accounts/list'
                    ),
                    array(
                        'label' => '角色管理',
                        'uri' => '/user/role/list'
                    ),
                    array(
                        'label' => '权限分配',
                        'uri' => '/user/authority/list'
                    ),
                ),
            ),
            array(
                'label' => '账号管理',
                'uri' => '#',
                'fa' => 'fa fa-user',
                'nav_li_class' => 'treeview',
                'pages' => array(
                    array(
                        'label' => '修改密码',
                        'uri' => '/admin/subject/list',
                    ),
                    array(
                        'label' => '退出',
                        'uri' => '/user/accounts/logout',
                    ),
                ),
            ),
        );
        $container = new Zend_Navigation();
        $container->addPages($pages);
        $this->bootstrap("layout");
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        $sidebar_menu = self::htmlify($container, 'sidebar-menu', 'treeview', 'treeview-menu');
        $view->sidebar_menu = $sidebar_menu;
    }

    /**
     * 生成sidebar菜单
     * @param unknown $container
     * @param string $sidebar_menu_class
     * @param string $treeview_class
     * @param string $treeview_menu_class
     */
    public static function htmlify($container, $sidebar_menu_class = 'sidebar-menu', $treeview_class = 'treeview', $treeview_menu_class = 'treeview-menu')
    {
        $menu = '<ul class="' . $sidebar_menu_class . '">';
        foreach ($container as $pages) {
            $menu .= '<li class="' . $treeview_class . '">
                       <a class="' . $pages->class . '" href="' . $pages->uri . '"><i class="' . $pages->fa . '"></i><span>' . $pages->label . '</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>';
            $menu .= '<ul class="' . $treeview_menu_class . '">';
            
            foreach ($pages as $page) {
                $menu .= '<li><a href="' . $page->uri . '"><i class="fa fa-circle-o"></i>' . $page . '</a></li>';
            }
            $menu .= '</ul>';
            $menu .= '</li>';
        }
        $menu .= '</ul>';
        return $menu;
    }
}

