<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * HelloWorld Controller
 */
class TaskManControllerLabel extends JControllerForm
{
	
	
	function save()
	{
			$app=JFactory::getApplication();
			$post=JRequest::get('post');
			
			$id=$post['jform']['label_id'];
			
			$model=$this->getModel('task');
			
			if(!$model->save($post))
			{
				//Throw Error
				//Redirect When save failed
				$app->redirect(JRoute::_('index.php?option=com_taskman&view=label&layout=edit&id='.$id),'Save Failed','Error');
			}
			
			//Redirect When save success
			$app->redirect(JRoute::_('index.php?option=com_taskman&view=label'),'Save Success ','Message');
			
			
			
	}
	/*
	function edit()
	{
		echo "ffff";
	}*/
	
}
