<?php

/**
 * A form button submit definition
 *
 * @category Forms
 * @package Twitter_Bootstrap_Form
 * @subpackage Element
 * @author Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * A form submit button
 *
 * @category Forms
 * @package Twitter_Bootstrap_Form
 * @subpackage Element
 * @author Christian Soronellas <csoronellas@emagister.com>
 */
class Twitter_Bootstrap_Form_Element_Email extends Zend_Form_Element_Text
{

    public function __construct ($spec, $options = null)
    {
        // Parsley.js email validation
        $options['data-type'] = 'email';

        parent::__construct($spec, $options);

        $validator = new Zend_Validate_EmailAddress();
        $validator->setMessages(array(
                                     Zend_Validate_EmailAddress::INVALID_FORMAT => "wrong Email format",
                                     Zend_Validate_Hostname::INVALID_HOSTNAME => "Hostname of this Email is not valid",
                                     Zend_Validate_Hostname::LOCAL_NAME_NOT_ALLOWED => "You can not use a local name."
                                ));
        $this->addValidator($validator);
    }

}
