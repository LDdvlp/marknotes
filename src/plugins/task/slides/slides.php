<?php

/**
 * What are the actions to fired when MarkNotes is running the "slides" task ?
 */

namespace MarkNotes\Plugins\Task;

defined('_MARKNOTES') or die('No direct access allowed');

class Slides
{
    public static function run(&$params = null)
    {
        // Display the HTML rendering of a note
        $aeEvents = \MarkNotes\Events::getInstance();
        $aeEvents->loadPlugins('content', 'slides');
        $args = array(&$params);
        $aeEvents->trigger('export.slides', $args);

        echo $params['html'];

        return true;
    }

    /**
     * Attach the function and responds to events
     */
    public function bind()
    {
        $aeEvents = \MarkNotes\Events::getInstance();
        $aeEvents->bind('run.task', __CLASS__.'::run');
        return true;
    }
}
