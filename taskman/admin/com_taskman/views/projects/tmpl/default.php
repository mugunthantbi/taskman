<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
 
// load tooltip behavior
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');


$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));


?>
<form action="<?php echo JRoute::_('index.php?option=com_taskman&view=project&layout=edit'); ?>" 
		method="post" name="adminForm" id="adminForm">
        <table class="table table-striped">
                <thead>
        <tr>
        <th width="5">
											<!-- arg1-text, arg2-db query name, arg3,4 ordering default values -->
				<?php echo JHtml::_('grid.sort', 'COM_TASKMAN_PROJECT_ID', 'p.project_id', $listDirn, $listOrder); ?>
        </th>
        <th width="20">
                <input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this)" />
        </th>                   
        <th>
             	<?php echo JHtml::_('grid.sort', 'COM_TASKMAN_PROJECT_STATE', 'p.state', $listDirn, $listOrder); ?>
        </th>
        <th>
             	<?php echo JHtml::_('grid.sort', 'COM_TASKMAN_PROJECT_NAME', 'p.proj_name', $listDirn, $listOrder); ?>
        </th>
        
        
        <th>
             	<?php echo JHtml::_('grid.sort', 'COM_TASKMAN_PROJECT_MEMBERS', 'a.proj_members', $listDirn, $listOrder); ?>
        </th>
        
</tr>

                </thead>
                <tfoot>
                <tr>
        <td colspan="3"><?php echo $this->pagination->getListFooter(); ?></td>
</tr>

                </tfoot>
                <tbody>
                <?php foreach($this->items as $i => $item): 
                
                $canChange=1;
                
                ?>
                
				<tr class="row<?php echo $i % 2; ?>">
                <td>
                        <?php echo $item->project_id; ?>
                </td>
                <td>
                        <?php echo JHtml::_('grid.id', $i, $item->project_id); ?>
                </td>
                <td>
                        <?php echo JHtml::_('jgrid.published', $item->state, $i, 'task.', $canChange, 'cb'); ?>
                        
                </td>
                <td>
                        <?php echo $item->proj_name; ?>
                        
                </td>
                <td>
                        <?php echo $item->proj_members; ?>
                        
                </td>
                
        </tr>
<?php endforeach; ?>

                </tbody>
        </table>
        
        <div>
                <input type="hidden" name="task" value="" />
                <input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>
