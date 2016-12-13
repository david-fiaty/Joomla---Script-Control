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

/**
 * Jlscriptcontrol helper.
 *
 * @since  1.6
 */
class JlscriptcontrolHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  string
	 *
	 * @return void
	 */
	public static function addSubmenu($vName = '')
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_JLSCRIPTCONTROL_TITLE_JSSCRIPTS'),
			'index.php?option=com_jlscriptcontrol&view=jsscripts',
			$vName == 'jsscripts'
		);

JHtmlSidebar::addEntry(
			JText::_('COM_JLSCRIPTCONTROL_TITLE_CSSSCRIPTS'),
			'index.php?option=com_jlscriptcontrol&view=cssscripts',
			$vName == 'cssscripts'
		);

	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return    JObject
	 *
	 * @since    1.6
	 */
	public static function getActions()
	{
		$user   = JFactory::getUser();
		$result = new JObject;

		$assetName = 'com_jlscriptcontrol';

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
		);

		foreach ($actions as $action)
		{
			$result->set($action, $user->authorise($action, $assetName));
		}

		return $result;
	}
}
