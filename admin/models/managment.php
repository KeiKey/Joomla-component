<?php

defined('_JEXEC') or die('Restricted access');

class ManagmentModelManagment extends JModelItem
{
    protected $transaction;

    public function getTrs()
    {
        if (!isset($this->transaction))
        {
            $this->transaction = 'I will add a transaction later from db!';
        }

        return $this->transaction;
    }
}