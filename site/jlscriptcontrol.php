<?php
/**
 * @version    1.0
 * @package    JLinker Script Control
 * @author     David Fiaty <contact@jlinker.com>
 * @copyright  Copyright (C) 2015 JLinker. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::register('JlscriptcontrolFrontendHelper', JPATH_COMPONENT . '/helpers/jlscriptcontrol.php');

// Execute the task.
$controller = JControllerLegacy::getInstance('Jlscriptcontrol');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
