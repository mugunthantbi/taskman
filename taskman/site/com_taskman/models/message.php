<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
/**
 * HelloWorld Model
 */
class TaskManModelTask extends JModelItem
{
        /**
         * @var string msg
         */
        protected $msg;
 
        /**
         * Get the message
         * @return string The message to be displayed to the user
         */
         
         public function getTable($type = 'taskman', $prefix = 'TaskManTable', $config = array()) 
        {
                return JTable::getInstance($type, $prefix, $config);
        }
        
        public function getMsg($id = 1) 
        {
                if (!is_array($this->messages))
                {
                        $this->messages = array();
                }
 
                if (!isset($this->messages[$id])) 
                {
                        //request the selected id
                        $id = JRequest::getInt('id');
 
                        // Get a TableHelloWorld instance
                        $table = $this->getTable();
 
                        // Load the message
                        $table->load($id);
 
                        // Assign the message
                        $this->messages[$id] = $table->name;
                }
 
                return $this->messages[$id];
        }

         
       /* public function getArray() 
        {
			$a1=array('name'=>'Bala','email'=>'bala@gmail.com');
                if (!isset($this->msg)) 
                {
                        $this->msg = $a1;
                }
                return $this->msg;
        }

        public function getObject() 
        {
				$obj=new stdClass();
				$obj->name="suresh";
				$obj->email="suresh@gmail.com";
                return $obj;
        }
*/
}
