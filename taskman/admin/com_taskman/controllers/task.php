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
	function saveDate()
	{
  		$post = JRequest::get('post');
  			
  		$model= $this->getModel();
  	
  		$row = $model->getTable();
  		
  		$row->load($post['task_id']);
  
	  	$row->duedate = $post['duedate'];

	  	$row->store();
  	
	  	echo $post['duedate'];
  		exit;
  	}

	
	
  	function saveAssign()
  	{
  		$post = JRequest::get('post');
  		 
  	
  		$model= $this->getModel();
  		 
  		$row = $model->getTable();
  	
  		$row->load($post['task_id']);
  	
  		$row->assignee = $post['assignee'];
  	
  		$row->store();
  		 
  		echo $post['assignee'];
  		exit;
  	}
  	function saveFollower()
  	{
  		$post = JRequest::get('post');
  			
  		 
  		$model= $this->getModel();
  			
  		$row = $model->getTable();
  		 
  		$row->load($post['task_id']);
  		 
  		$row->followers = $post['followers'];
  		 
  		$row->store();
  			
  		echo $post['followers'];
  		exit;
  	}
  	
  	
}
