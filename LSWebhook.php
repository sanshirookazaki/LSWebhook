<?php

/**
 * Class LSWebhook
 */
class LSWebhook extends PluginBase
{
    /**
     * @var string
     */
    static protected $description = 'LSWebhook Plugin';

    /**
     * @var string
     */
    static protected $name = 'LSWebhook';

    /**
     * @var string
     */
    protected $storage = 'DbStorage';

    /**
     * @var string
     */
    protected $settings = [];

    /**
     * @return void
     */
    public function init()
    {
        $this->subscribe('afterSurveyActivate');
    }

    /**
     * @return void
     */
    public function afterSurveyActivate()
    {
        exec('touch /tmp/test');
    }
}
