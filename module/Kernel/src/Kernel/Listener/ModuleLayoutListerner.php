<?php

namespace Kernel\Listener;

use Zend\EventManager\ListenerAggregateInterface;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\MvcEvent;

class ModuleLayoutListerner implements ListenerAggregateInterface, ServiceManagerAwareInterface {
    
    protected $ServiceManager;
    
    public function __construct(ServiceManager $ServiceManager)
    {
        $this->setServiceManager($ServiceManager);
    }
    
    public function attach(EventManagerInterface $Events)
    {
        ;
    }
    public function detach(EventManagerInterface $Events)
    {
        ;
    }
    public function setServiceManager(ServiceManager $ServiceManager)
    {
        $this->ServiceManager = $ServiceManager;
    }
    
    public function getServiceManager(){
        return $this->ServiceManager;
    }
    
    /**************************************************************************/
    
    public function process(\Zend\Mvc\MvcEvent $Event){
        $controller = $Event->getTarget();
        $controllerClass = get_class($controller);
        $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
        $config = $Event->getApplication()->getServiceManager()->get('config');
        if (isset($config['module_layouts'][$moduleNamespace])) {
            $controller->layout($config['module_layouts'][$moduleNamespace]); //Apply layout.
        }
    }
    
}

