<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorlds View
 */
class TaskManViewTasks extends JViewLegacy
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
                
                $this->sidebar = JHtmlSidebar::render();
//                $this->setDocument();
 
                // Display the template
                parent::display($tpl);
        }
        protected function addToolBar() 
        {
                JToolBarHelper::title(JText::_('COM_TASKMAN_DETAIL'));
                JToolBarHelper::addNew('task.add');
                JToolBarHelper::editList('task.edit');
                JToolBarHelper::deleteList('', 'tasks.delete');
                JToolBarHelper::publish('tasks.publish','JTOOLBAR_PUBLISH',true);
                JToolBarHelper::unpublish('tasks.unpublish','JTOOLBAR_UNPUBLISH',true);
                
                JHtmlSidebar::setAction('index.php?option=com_taskman&view=tasks');

				//State filter
				JHtmlSidebar::addFilter(
				JText::_('JOPTION_SELECT_PUBLISHED'),
				'filter_state',
				JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true)
				);
				
				//company filter
				$filter_company_options = $this->get('CompanyOptions');
				JHtmlSidebar::addFilter(
				JText::_('JOPTION_SELECT_PUBLISHED'),
				'filter_company',
				JHtml::_('select.options', $filter_company_options, 'value', 'text', $this->state->get('filter.company'), true)
				);
		
                
                
        }
			
/*  			protected function setDocument()
			{
				$isNew=($this->item->id < 1);
				$document=JFactory::getDocument();
				$document->setTitle($isNew ? JText::_('HELLOWORLD_CREATE') : JText::_('HELLOWORLD_EDIT') );
					
				
				
			}
  **/    

}
