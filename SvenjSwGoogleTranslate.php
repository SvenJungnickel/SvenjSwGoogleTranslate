<?php

namespace SvenjSwGoogleTranslate;

use Shopware\Components\Plugin;

/**
 * Shopware-Plugin SvenjSwGoogleTranslate.
 */
class SvenjSwGoogleTranslate extends Plugin
{
    /**
     * Required for adding the register subscriber event before dispatching
     *
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Front_StartDispatch' => 'onRegisterSubscriber'
        ];
    }

    /**
     * Add all subscriber classes for events here
     *
     * @param \Enlight_Controller_EventArgs $args
     */
    public function onRegisterSubscriber(\Enlight_Controller_EventArgs $args)
    {
        $config = $this->container->get('shopware.plugin.config_reader')->getByPluginName($this->getName());
        $viewDir = $this->getPath() . '/Resources/views/';

        Shopware()->Events()->addSubscriber(new Subscriber\Frontend($config, $viewDir));
        Shopware()->Events()->addSubscriber(new Subscriber\Less($viewDir));
    }
}