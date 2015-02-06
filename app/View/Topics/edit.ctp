

<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class="Topic form">
		
			<?php echo $this->Form->create('Topic', array('type'=>'file','inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Edit Forum'); ?></h2>
						<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "Edit Forum Topic";?></li>
					<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Forum ', array('controller' => 'topics', 'action' => 'admin_index')).'</li>';
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "students";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "Lecturer";
			}?>


					
              		
            		</ol>
					<hr/>


<div class="form-group">
	
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->
<div class="form-group">
	<?php echo $this->Form->label('Subject', 'Subject');?>
		<?php echo $this->Form->input('subject', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Description', 'Description');?>
		<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Date', 'Date');?>
		<?php echo $this->Form->input('date', array('class' => 'form-control')); ?>
</div><!-- .form-group -->


<div class="form-group">
	<?php echo $this->Form->label('Program', 'Program');?>
		<?php echo $this->Form->input('program_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Faculty', 'Faculty');?>
		<?php echo $this->Form->input('faculty_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->


<div class="form-group">
	
		<?php echo $this->Form->input('user_id', array('type'=>'hidden' ,  'value'=> $this->Session->Read('Auth.User.id'), 'class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Attachment', 'Attachment');?>
		<?php echo $this->Form->input('attachment', array('type'=>'file','class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Course', 'Course');?>
		<?php echo $this->Form->input('Course', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Fcategory', 'Fcategory');?>
		<?php echo $this->Form->input('Fcategory', array('class' => 'form-control')); ?>
</div><!-- .form-group -->


		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->