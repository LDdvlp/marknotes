<?php

namespace MarkNotes\Plugins\Content\HTML;

defined('_MARKNOTES') or die('No direct access allowed');

class Prism
{

    /**
     * Provide additionnal javascript
     */
    public static function addJS(&$js = null)
    {
        $aeFunctions = \MarkNotes\Functions::getInstance();

        $root = rtrim($aeFunctions->getCurrentURL(true, false), '/');

        $js .=
            "<script type=\"text/javascript\" src=\"".$root."/libs/prism/prism.js\" data-manual></script>\n".
            "<script type=\"text/javascript\" src=\"".$root."/plugins/content/html/prism/prism.js\"></script>\n";

        return true;
    }

    /**
     * Provide additionnal stylesheets
     */
    public static function addCSS(&$css = null)
    {
        $aeFunctions = \MarkNotes\Functions::getInstance();

        $root = rtrim($aeFunctions->getCurrentURL(true, false), '/');

        $css .=
            "<link media=\"screen\" rel=\"stylesheet\" type=\"text/css\" href=\"".$root."/libs/prism/prism.css\" />\n";

        return true;
    }

    /**
     * Attach the function and responds to events
     */
    public function bind()
    {
        $aeEvents = \MarkNotes\Events::getInstance();
        $aeEvents->bind('render.js', __CLASS__.'::addJS');
        $aeEvents->bind('render.css', __CLASS__.'::addCSS');
        return true;
    }
}
