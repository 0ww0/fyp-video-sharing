
<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class="videos form">
		
			<?php echo $this->Form->create('Video', array('inputDefaults' => array('label' => false), 'role' => 'form','type'=>'file')); ?>
				<fieldset>
					<h2><?php echo __('Add Video'); ?></h2>
					<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php 
					if ( $this->Session->Read('Auth.User.role_id') == 1) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));
             		}
             		if ( $this->Session->Read('Auth.User.role_id') == 2) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));
             		}
             		if ( $this->Session->Read('Auth.User.role_id') == 3) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index'));
             		}
             		 ?></li>
					<li class="active"> <?php echo "Add new Video";?></li>
             			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'admin_index')).'</li>';
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'index')).'</li>';

					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
						echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'index')).'</li>';
			}?>
              
            		</ol>
					<hr/>
<div class="form-group">
	<?php echo $this->Form->label('Name', 'Name');?>
		<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Description', 'Description');?>
		<?php echo $this->Form->textarea('description', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Date', 'Date');?>
		<?php echo $this->Form->input('date', array('type'=>'text' ,'class' => 'datepicker form-control')); ?>
</div><!-- .form-group -->


<div class="form-group">
	<?php echo $this->Form->label('Upload Video', 'Upload Video');?>
		<?php echo $this->Form->input('filename', array('class' => 'form-control', 'type'=>'file')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Upload Thumbnail', 'Upload Thumbnail');?>
		<?php echo $this->Form->input('thumb', array('class' => 'form-control', 'type'=>'file')); ?>
</div><!-- .form-group -->



<div class="form-group">
	<?php echo $this->Form->label('Visibility', 'Visibility');?>
	<?php 
	$options = array('Public' => 'Public'.'<br/>', 'Private' => 'Private');
	$attributes = array('legend' => false);
	echo $this->Form->radio('visibility', $options, $attributes);
	?>
		
</div><!-- .form-group -->


<div class="form-group">
	
		<?php echo $this->Form->input('user_id', array('class' => 'form-control','type'=>'hidden','value'=>$this->Session->Read('Auth.User.id'))); ?>
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
	<?php echo $this->Form->label('Course', 'Course');?>
		<?php echo $this->Form->input('Course', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Category', 'Category');?>
		<?php echo $this->Form->input('Vcategory', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->