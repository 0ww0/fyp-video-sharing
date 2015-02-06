

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Profile form">
		
			<?php echo $this->Form->create('Lecturer', array('inputDefaults' => array('label' => false), 'role' => 'form','type'=>'file')); ?>
				<fieldset>
					<h2><?php echo __('Add Courses'); ?></h2>
					<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "Add Course";?></li>

             		

              
            		</ol>
					<hr/>




<div class="form-group">
	
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->






<div class="form-group">
	 
	<?php 
	  
	    if ($this->Session->Read('Auth.User.role_id') == 2 || $this->Session->Read('Auth.User.role_id') == 3) {
	    	echo 
	 	$this->Form->input('Course', array('type'=>'select','multiple'=>'checkbox','hiddenField'=>false));
	    }
		

	  ?>
</div><!-- .form-group -->




<div class="form-group">

		<?php echo $this->Form->input('user_id', array('class' => 'form-control','type'=>'hidden','value'=>$this->Session->Read('Auth.User.id'))); ?>
</div><!-- .form-group -->


		
		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->