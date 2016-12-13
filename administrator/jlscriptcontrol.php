<?php
/**
 * @version    1.0
 * @package    JLinker Script Control
 * @author     David Fiaty <contact@jlinker.com>
 * @copyright  Copyright (C) 2015 JLinker. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_jlscriptcontrol'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('Jlscriptcontrol');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
