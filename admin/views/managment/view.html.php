<?php

defined('_JEXEC') or die('Restricted access');

class ManagmentViewManagment extends JViewLegacy
{

    public function display($tpl = null)
    {
        $this->transaction = $this->get('Trs');

        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
            return false;
        }
        parent::display($tpl);
    }


}