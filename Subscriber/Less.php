<?php
namespace SvenjSwGoogleTranslate\Subscriber;

use \Enlight\Event\SubscriberInterface;

class Less implements SubscriberInterface
{
    /**
     * @var string
     */
    private $viewDir;

    /**
     * @param $viewDir
     */
    public function __construct($viewDir)
    {
        $this->viewDir = $viewDir;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Theme_Compiler_Collect_Plugin_Less' => 'onCollectPluginLess',
	    ];
    }

    /**
     * @return \Shopware\Components\Theme\LessDefinition
     */
    public function onCollectPluginLess() {

        return new \Shopware\Components\Theme\LessDefinition(
            [],
            [
                $this->viewDir . '/frontend/_public/src/less/all.less'
            ]
	    );
    }

}