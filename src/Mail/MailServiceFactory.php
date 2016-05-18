<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio for the source repository
 */
 
namespace Armenio\Mail;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 *
 *
 * MailServiceFactory
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 *
 *
 */
class MailServiceFactory implements FactoryInterface
{
    /**
     * zend-servicemanager v2 factory for creating Mail instance.
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @returns Mail
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $mail = new Mail();
        return $mail;
    }
}
