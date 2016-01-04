<?php
$app_listeners = array(
    //Module layouts.
    'Zend\Mvc\Controller\AbstractActionController' => array (
        
        'events' => array (
            \Zend\Mvc\MvcEvent::EVENT_DISPATCH => array (
                'Kernel\Listener\ModuleLayoutListerner' => array (
                    'callback' => 'process',
                    'priority' => 100
                ),
            ),
        )
    )
);
return array(
    'app_listeners' => $app_listeners
);