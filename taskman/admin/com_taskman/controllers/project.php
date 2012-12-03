<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * HelloWorld Controller
 */
class TaskManControllerProject extends JControllerForm
{
	
	
	function save()
	{
			$app=JFactory::getApplication();
			$post=JRequest::get('post');
			
			$id=$post['jform']['project_id'];
			
			$model=$this->getModel('company');
			
			if(!$model->save($post))
			{
				//Throw Error
				//Redirect When save failed
				$app->redirect(JRoute::_('index.php?option=com_taskman&view=project&layout=edit&id='.$id),'Save Failed','Error');
			}
			
			//Redirect When save success
			$app->redirect(JRoute::_('index.php?option=com_taskman&view=project'),'Save Success ','Message');
			
			
			
	}
	
	
	/*
	function edit()
	{
		echo "ffff";
	}*/
	
}
