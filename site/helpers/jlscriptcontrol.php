<?php

/**
 * @version    1.0
 * @package    JLinker Script Control
 * @author     David Fiaty <contact@jlinker.com>
 * @copyright  Copyright (C) 2015 JLinker. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Class JlscriptcontrolFrontendHelper
 *
 * @since  1.6
 */
class JlscriptcontrolFrontendHelper
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_jlscriptcontrol/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_jlscriptcontrol/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'JlscriptcontrolModel');
		}

		return $model;
	}
}
