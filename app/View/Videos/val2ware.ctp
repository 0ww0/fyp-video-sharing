
<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class="videos form">
		
			<?php echo $this->Form->create('Video', array('inputDefaults' => array('label' => false), 'role' => 'form','type'=>'file')); ?>
				<fieldset>
					<h2><?php echo __('Validate Student Courseware'); ?></h2>
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
					<li class="active"> <?php echo "Validate Courseware Video";?></li>
             			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'admin_index')).'</li>';
					
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo '<li>' . $this->Html->link(' List of Courseware Video ', array('controller' => 'videos', 'action' => 'studware')).'</li>';
					
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo '<li>' . $this->Html->link(' List of Courseware Video ', array('controller' => 'videos', 'action' => 'lectware')).'</li>';
					
			}?>

              
            		</ol>
					<hr/>
<div class="form-group">

		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->




<div class="form-group">
<?php echo $this->Form->label('Validate for Student', 'Validate for Student');?>
			<?php 
			echo $this->Form->input('status', array(
   'class' => 'form-control' ,'options' => array('pending'=>'pending', 'accept'=>'accept', 'reject'=>'reject'),
    'empty' => '(choose one)'));



			 ?>
</div><!-- .form-group -->


<div class="form-group">
	<?php echo $this->Form->label('Comment on Courseware', 'Comment on Courseware');?>
		<?php echo $this->Form->textarea('comware', array('class' => 'form-control')); ?>
</div><!-- .form-group -->











		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->