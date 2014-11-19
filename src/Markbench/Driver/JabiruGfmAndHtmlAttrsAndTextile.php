<?php

namespace Markbench\Driver;

use Scribe\Jabiru\Jabiru;
use Scribe\Jabiru\Extension\Gfm;
use Scribe\Jabiru\Extension\Textile;
use Scribe\Jabiru\Extension\Html;

class JabiruGfmAndHtmlAttrsTextileDriver extends JabiruDriver
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
            new Gfm\WhiteSpaceExtension(),
            new Textile\HeaderExtension(),
            new Textile\DefinitionListExtension(),
            new Textile\CommentExtension(),
            new Html\AttributesExtension(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getDialect()
    {
        return 'gfm+attrs+textile';
    }

}