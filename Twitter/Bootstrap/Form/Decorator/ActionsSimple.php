<?php
/**
 * Decorator definition for the submit buttons
 *
 * @category Forms
 * @package Twitter_Bootstrap_Form
 * @subpackage Decorator
 * @author Victor
 */

/**
 * A decorator to render the submit form buttons without all the funny bootstrap styles
 *
 * @category Forms
 * @package Twitter_Bootstrap_Form
 * @subpackage Decorator
 * @author Christian Soronellas <csoronellas@emagister.com>
 */
class Twitter_Bootstrap_Form_Decorator_ActionsSimple extends Twitter_Bootstrap_Form_Decorator_Actions
{
    /**
     * Renders the content
     *
     * @param string $content
     * @return string
     */
    public function render($content)
    {
        return '<div class="simple-form-actions pull-right">
                    ' . $this->buildButtons() . '
                </div>';
    }
}