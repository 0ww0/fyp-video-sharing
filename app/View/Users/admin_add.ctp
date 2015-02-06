
<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class=" form">
		
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Add User'); ?></h2>
					<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
					<li class="active"> <?php echo "Add new User";?></li>
             		  <li class="active"> <?php echo $this->Html->link(' List of All User', array('controller' => 'users', 'action' => 'admin_index'));?></li>
              
            		</ol>
					<hr/>
<div class="form-group">
	<?php echo $this->Form->label('Username', 'Username');?>
		<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('Password', 'Password');?>
		<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
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
	<?php echo $this->Form->label('Role', 'Role');?>
		<?php echo $this->Form->input('role_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->


		
		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->