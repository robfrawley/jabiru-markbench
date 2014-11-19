<?php

namespace Markbench\Driver;

use Scribe\Jabiru\Jabiru;
use Scribe\Jabiru\Extension\Gfm;

class JabiruGfmDriver extends JabiruDriver
{

    /**
     * {@inheritdoc}
     */
    public function initialize()
    {
        $this->jabiru = new Jabiru();
        $this->jabiru->addExtensions([
            new Gfm\FencedCodeBlockExtension(),
            new Gfm\InlineStyleExtension(),
            new Gfm\TableExtension(),
            new Gfm\TaskListExtension(),
            new Gfm\WhiteSpaceExtension()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getDialect()
    {
        return 'gfm';
    }

}