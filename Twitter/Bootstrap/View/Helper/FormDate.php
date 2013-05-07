<?php
class Twitter_Bootstrap_View_Helper_FormDate extends Zend_View_Helper_FormText {

    public function formDate($name, $value = null, $attribs = null) {

        if ($value) {
            $date  = new DateTime($value);
            $value = $date->format('d/m/Y');
        }

        return $this->formText($name, $value, $attribs);
    }
}