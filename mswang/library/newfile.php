<?php

function htmlify($container, $menu_name = null)
{
    $i = 0;
    $menu = '<ul class="' . $menu_name . '">';
    foreach ($container as $page) {
        $menu .= '<li id="' . $page->htmlfyId . '"><a id="menu-' . $page->id . '" class="' . $page->class . '" href="' . $page->uri . '">' . $page->label . '</a>';
        $menu .= '<ul id="' . $page->htmlfyClass . '">';
        
        foreach ($page as $pages) {
            $menu .= '<li id="li"><a class="' . $page->class . '" href="' . $pages->uri . '">' . $pages . '</a></li>';
        }
        $menu .= '</li>';
        $menu .= '</ul>';
    }
    return $menu;
}