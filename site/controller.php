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

jimport('joomla.application.component.controller');

/**
 * Class JlscriptcontrolController
 *
 * @since  1.6
 */
class JlscriptcontrolController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   mixed    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController   This object to support chaining.
	 *
	 * @since    1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT . '/helpers/jlscriptcontrol.php';

		$view = JFactory::getApplication()->input->getCmd('view', 'jsscripts');
		JFactory::getApplication()->input->set('view', $view);

		parent::display($cachable, $urlparams);

		return $this;
	}
}
