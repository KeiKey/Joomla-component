<?php

defined('_JEXEC') or die('Restricted access');
/*
JFormHelper::loadFieldClass('list');

class JFormFieldManagment extends JFormFieldList
{
    protected $type = 'Managment';

    protected function getOptions()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('*');
        $query->from('#__transaction');
        $db->setQuery((string)$query);
        $messages = $db->loadObjectList();
        $options = array();

        if ($messages) {
            foreach ($messages as $message) {
                $options[] = JHtml::_('select.option', $message->id, $message->amount,
                    $message->description, $message->date, $message->image, $message->type,
                    $message->user_id);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}