<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class TaskManViewTask extends JViewLegacy
{
        // Overwriting JView display method
        function display($tpl = null) 
        {
                // Assign data to the view
                $this->msg = $this->get('Array');
                $this->msg1=$this->get('Object');
 
                // Display the view
                parent::display($tpl);
        }
}
