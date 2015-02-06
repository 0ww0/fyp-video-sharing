
<br/>


<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Profile form">
		
			<?php echo $this->Form->create('Profile', array('inputDefaults' => array('label' => false), 'role' => 'form','type'=>'file')); ?>
				<fieldset>
					<h2><?php echo __('Add Profile'); ?></h2>
					<hr/>

<div class="form-group">
	<?php echo $this->Form->label('Full Name', 'Full Name');?>
		<?php echo $this->Form->input('fullName', array('value'=>$this->Session->Read('Auth.User.fullName'),'class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Email', 'Email');?>
		<?php echo $this->Form->input('email', array('value'=>$this->Session->Read('Auth.User.email'),'class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Picture', 'Picture');?>
		<?php echo $this->Form->input('picture', array('type'=>'file','class' => 'form-control')); ?>
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