<?php
namespace SvenjSwGoogleTranslate\Subscriber;

use \Enlight\Event\SubscriberInterface;

class Frontend implements SubscriberInterface
{
    /**
     * @var Object
     */
    private $config;

    /**
     * @var string
     */
    private $viewDir;

    /**
     * @param $config
     * @param $viewDir
     */
    public function __construct($config, $viewDir)
    {
        $this->config = $config;
        $this->viewDir = $viewDir;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onPostDispatchSecure',
	    ];
    }

    /**
     * @param \Enlight_Event_EventArgs $args
     */
    public function onPostDispatchSecure(\Enlight_Event_EventArgs $args)
    {
        $view = $args->getSubject()->View();

        $view->assign('sAnalyticsWebPropertyID', $this->config['AnalyticsWebPropertyID']);
        $view->addTemplateDir($this->viewDir);
    }
}