<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * HelloWorld Controller
 */
class TaskManControllerCompany extends JControllerForm
{
	
	
	function save()
	{
			$app=JFactory::getApplication();
			$post=JRequest::get('post');
			
			$id=$post['jform']['company_id'];
			
			$model=$this->getModel('company');
			
			if(!$model->save($post))
			{
				//Throw Error
				//Redirect When save failed
				$app->redirect(JRoute::_('index.php?option=com_taskman&view=compay&layout=edit&id='.$id),'Save Failed','Error');
			}
			
			//Redirect When save success
			$app->redirect(JRoute::_('index.php?option=com_taskman&view=company'),'Save Success ','Message');
			
			
			
	}
	/*
	function edit()
	{
		echo "ffff";
	}*/
	
}
