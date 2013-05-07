<?php
class Twitter_Bootstrap_Form_Element_Date extends Zend_Form_Element_Text {

    public $helper = 'formDate';

    public function init() {
        parent::init();
        $this
            ->setAttrib('class', 'datepicker')
        ;
    }

    public function getValue() {
        $value = parent::getValue();
        $date  = DateTime::createFromFormat('d/m/Y', $value);

        if ($date) {
            return $date->format('Y-m-d');
        } else {
            return '';
        }
    }

    public function setValue($value) {
        // If form doesn't validate the date can come back as d/m/Y
        if (strpos($value, '-') !== false) {
            $date = new DateTime($value);
            $value = $date->format('d/m/Y');
        }
        parent::setValue($value);
    }

}