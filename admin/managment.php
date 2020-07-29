admin/managment.php Administration
<?php

defined('_JEXEC') or die('Restricted access');
$controller = JControllerLegacy::getInstance('Managment');

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();