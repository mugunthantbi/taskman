<?php
//print_r($this->item);
?>
<html>
<body>
<div class="row-fluid ">
<div class="span6 row-striped">
	
<div class="well">
<div class="row-fluid">
	<!--<div class="span4 row-title"><b>Task Name</b></div>-->
	<div class="span12 "><h3><?php echo $this->item->title; ?></h3></div>
</div>
<div class="row-fluid">
	<!-- <div class="span4 row-title"><b>Task Notes</b></div> -->
	<div class="span12"><p class="muted"><?php echo $this->item->notes; ?></p></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted"><i class="icon-user"></i>Assignee</div>
	<div class="span8"><strong><?php echo $this->item->assignee; ?></strong></div>
</div>
<div class="row-fluid">
	<div class="span4 muted">Company</div>
	<div class="span8"><strong><?php echo $this->item->company; ?></strong></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted">Followers</div>
	<div class="span8"><strong><?php echo $this->item->followers; ?></strong></div>
</div>
<div class="row-fluid">
	<div class="span4 muted">Projects</div>
	<div class="span8"><strong><?php echo $this->item->projects; ?></strong></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted">Label</div>
	<div class="span8"><strong><?php echo $this->item->label; ?></strong></div>
</div>
<div class="row-fluid">
	<div class="span4 muted"><i class="icon-file"></i>Task File</div>
	<div class="span8"><strong><?php echo $this->item->file; ?></strong></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted"><i class="icon-tasks"></i>Sub Task</div>
	<div class="span8"><strong><?php echo $this->item->subtask; ?></strong></div>
</div>
<div class="row-fluid">
	<div class="span4 muted">State</div>
	<div class="span8"><strong><?php echo $this->item->state; ?></strong></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted">Created By</div>
	<div class="span8"><strong><?php echo $this->item->create_by; ?></strong></div>
</div>
<div class="row-fluid">
	<div class="span4 muted">Priority</div>
	<div class="span8"><strong><?php echo $this->item->priority; ?></strong></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted">Task Status</div>
	<div class="span8"><strong><?php echo $this->item->label; ?></strong></div>
</div>
<div class="row-fluid">
	<div class="span4 muted"><i class="icon-tags"></i>Tasg</div>
	<div class="span8"><strong><?php echo $this->item->tags; ?></strong></div>
</div>
<div class="row-fluid">
	
	<div class="span4 muted">Feeds</div>
	<div class="span8"><strong><?php echo $this->item->feed; ?></strong></div>
</div>
<div class="row-fluid muted">
	<div class="span4 muted">Comments</div>
	<div class="span8"><strong><?php echo $this->item->comments; ?></strong></div>
</div>

</div>
</div>




	


</div>
</body>
</html>