<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * HelloWorld Controller
 */
class TaskManControllerTask extends JControllerForm
{
	
	
	function save()
	{
			$app=JFactory::getApplication();
			$post=JRequest::get('post');
			
			$id=$post['jform']['task_id'];
			
			$model=$this->getModel('task');
			
			if(!$model->save($post))
			{
				//Throw Error
				//Redirect When save failed
				$app->redirect(JRoute::_('index.php?option=com_taskman&view=task&layout=edit&id='.$id),'Save Failed','Error');
			}
			
			//Redirect When save success
			$app->redirect(JRoute::_('index.php?option=com_taskman&view=task'),'Save Success ','Message');
			
			
			
	}
	/*
	function edit()
	{
		echo "ffff";
	}*/
	
}
