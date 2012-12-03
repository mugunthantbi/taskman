<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class TaskManModelTasks extends JModelList
{
		protected function populateState($ordering = null, $direction = null)
		{
		
			$app = JFactory::getApplication('administrator');

			// Load the filter state.
			$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
			$this->setState('filter.search', $search);
			
			//Load State filter
			$published = $this->getUserStateFromRequest($this->context.'.filter.state', 'filter_state', '', 'string');
			$this->setState('filter.state', $published);
			
			parent::populateState($ordering, $direction);

		}
        /**
         * Method to build an SQL query to load the list data.
         *
         * @return      string  An SQL query
         */
        protected function getListQuery()
        {
                // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('a.task_id,a.title,a.notes,company,a.assignee,projects,a.subtask,a.duedate,a.tags,a.file,a.followers,label,a.feed,a.comments,a.state,a.create_by,a.task_status,a.priority');
                // From the hello table
                $query->from('#__taskman_task as a');
                
                
                // Filter by published state
				$published = $this->getState('filter.state');
				if (is_numeric($published)) {
					$query->where('a.state= '.(int) $published);
				} elseif ($published === '') {
					$query->where('(a.state IN (0, 1))');
				}
				
				
				// Search Filter
				$search = $this->getState('filter.search');
				if (!empty($search)) {
					if (stripos($search, 'tid:') === 0) {
						$query->where('task_id = '.(int) substr($search, 3));
					} else {
						$search = $db->Quote('%'.$db->escape($search, true).'%');
						$query->where('(title LIKE '.$search.' OR company LIKE '.$search.')');
					}
				}
				
				
				
				// Join over the company.
				$query->select('c.company_name');
				$query->join('LEFT', '#__taskman_company as c ON c.company_id = a.company');
				
				// Join over the project.
				$query->select('p.proj_name');
				$query->join('LEFT', '#__taskman_project as p ON p.project_id = a.projects');
				
				// Join over the label.
				$query->select('l.label_name');
				$query->join('LEFT', '#__taskman_label as l ON l.label_id = a.label');
				
                return $query;
        }
}
