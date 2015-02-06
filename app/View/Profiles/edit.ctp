
<div id="page-container" class="row">

	<!-- Action -->

	

	
	<div id="page-content" class="col-sm-9">

		<div class="Profiles form">
		
			<?php echo $this->Form->create('Profile', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Edit Profile '); ?></h2>
						<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'))?></li>
             		  <li class="active"> <?php echo"Edit Profile"; ?></li>
              
            		</ol>
					<hr/>
<div class="form-group">
	
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Full Name', 'Full Name');?>
		<?php echo $this->Form->input('fullName', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Email', 'Email');?>
		<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
</div><!-- .form-group -->


<div class="form-group">
	 
	<?php 
	  
	    if ($this->Session->Read('Auth.User.role_id') == 2 ) {
	    	echo $this->Form->label('Bio', 'Bio') .
	 	$this->Form->input('bio', array('class' => 'form-control'));
	    }
		

	  ?>
</div><!-- .form-group -->

<div class="form-group">
	 
	<?php 
	  
	    if ($this->Session->Read('Auth.User.role_id') == 2 || $this->Session->Read('Auth.User.role_id') == 3) {
	    	echo $this->Form->label('Faculty', 'Faculty') .
	 	$this->Form->input('faculty_id', array('class' => 'form-control'));
	    }
		

	  ?>
</div><!-- .form-group -->

<div class="form-group">
	 
	<?php 
	  
	    if ($this->Session->Read('Auth.User.role_id') == 2 || $this->Session->Read('Auth.User.role_id') == 3) {
	    	echo $this->Form->label('Program', 'Program') .
	 	$this->Form->input('program_id', array('class' => 'form-control'));
	    }
		

	  ?>
</div><!-- .form-group -->




<div class="form-group">

		<?php echo $this->Form->input('user_id', array('class' => 'form-control','type'=>'hidden','value'=>$this->Session->Read('Auth.User.id'))); ?>
</div><!-- .form-group -->

<div class="form-group">
		
		<?php echo $this->Form->input('status', array('type'=>'hidden','class' => 'form-control','options' => array('1' =>'Admin','2'=>'Student','3'=>'Lecturer'),'value'=>$this->Session->Read('Auth.User.role_id')));?>
</div><!-- .form-group -->
		
		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->



