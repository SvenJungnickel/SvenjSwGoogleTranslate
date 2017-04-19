<?php

namespace SvenjSwGoogleTranslate;

use Shopware\Components\Plugin;

/**
 * Shopware-Plugin SvenjSwGoogleTranslate.
 */
class SvenjSwGoogleTranslate extends Plugin
{
    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend_Index' => 'onPostDispatch',
        ];
    }

    /**
     * @param \Enlight_Event_EventArgs $args
     */
    public function onPostDispatch(\Enlight_Event_EventArgs $args)
    {
        $this->container->get('Template')->addTemplateDir(
            $this->getPath() . '/Resources/views/'
        );
    }
}