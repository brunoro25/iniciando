<?php
/**
 * namespace para nosso modulo contato
 */
namespace Contato;

/*use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;*/


class Module
{
/*    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }*/
    /**
     * include de arquivo para outras configuracoes desse modulo
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
 
    /**
     * autoloader para nosso modulo
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}