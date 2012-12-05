<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorlds View
 */
class TaskManViewCompanies extends JViewLegacy
{
        /**
         * HelloWorlds view display method
         * @return void
         */
        function display($tpl = null) 
        {
                // Get data from the model
                
                
                $state = $this->get('State');
                $items = $this->get('Items');
                $pagination = $this->get('Pagination');
				
                // Check for errors.
                if (count($errors = $this->get('Errors'))) 
                {
                        JError::raiseError(500, implode('<br />', $errors));
                        return false;
                }
                // Assign data to the view
                $this->state = $state;
                $this->items = $items;
                $this->pagination = $pagination;
                $this->addToolBar();
//                $this->setDocument();
 
                // Display the template
                parent::display($tpl);
        }
        protected function addToolBar() 
        {
                JToolBarHelper::title(JText::_('COM_TASKMAN_COMPANY'));
                JToolBarHelper::addNew('company.add');
                JToolBarHelper::editList('company.edit');
                JToolBarHelper::deleteList('', 'companies.delete');
                JToolBarHelper::publish('companies.publish','JTOOLBAR_PUBLISH',true);
                JToolBarHelper::unpublish('companies.unpublish','JTOOLBAR_UNPUBLISH',true);
                
                
        }
			
/*  			protected function setDocument()
			{
				$isNew=($this->item->id < 1);
				$document=JFactory::getDocument();
				$document->setTitle($isNew ? JText::_('HELLOWORLD_CREATE') : JText::_('HELLOWORLD_EDIT') );
					
				
				
			}
  **/    

}
