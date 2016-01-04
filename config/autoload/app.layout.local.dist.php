<?php

/**
 * @author Corneliu Iancu <corneliu.iancu27@gmail.com>
 * @Date Jan 03, 2015
 * @copyright (c) 2015, Corneliu Iancu
 */
$viewPath = getcwd() . '/view';

return array(
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => $viewPath . '/layout/layout.phtml',
            'error/404' => $viewPath . '/error/404.phtml',
            'error/index' => $viewPath . '/error/index.phtml',
            'application/index/index' => $viewPath . '/application/index/index.phtml',
        ),
        'template_path_stack' => array(
            $viewPath,
        ),
    ),
    'module_layouts' => array(
        'Application'        =>      'layout/layout.phtml',
        //'ZfcUser'          =>      'layout/layout.phtml',
        //'Admin'              =>      'layout/admin.phtml' 
    ),
);