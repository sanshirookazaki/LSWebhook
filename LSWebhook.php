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
        $this->subscribe('newSurveySettings');
    }

    /**
     * @return void
     */
    public function newSurveySettings()
    {
        exec('touch /tmp/test');
    }
}
