<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * Hello World Component Controller
 */
class HelloWorld1Controller extends JControllerLegacy
{
	function display()
	{
		JRequest::setVar('view',JRequest::getCmd('view','task'));
		parent::display();
	}
	
}
