<?php

namespace Markbench\Driver;

use Scribe\Jabiru\Jabiru;
use Markbench\DriverInterface;

class JabiruDriver implements DriverInterface
{

    /**
     * @var Jabiru
     */
    protected $jabiru;

    /**
     * {@inheritdoc}
     */
    public function initialize()
    {
        $this->jabiru = new Jabiru();
    }

    /**
     * {@inheritdoc}
     */
    public function run($markdown = '')
    {
        return $this->jabiru->render($markdown);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'scribe/jabiru';
    }

    /**
     * {@inheritdoc}
     */
    public function getDialect()
    {
        return 'core';
    }

    /**
     * {@inheritdoc}
     */
    public function checkRequirements()
    {
        return class_exists('Scribe\\Jabiru\\Jabiru');
    }

}
