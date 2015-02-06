

<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class="Profiles form">
		
			<?php echo $this->Form->create('Lecturer', array('inputDefaults' => array('label' => false), 'role' => 'form','type'=>'file')); ?>
				<fieldset>
					<h2><?php echo __('Change Profile Picture'); ?></h2>
					<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'Lecturers', 'action' => 'index'))?></li>
             		 <li class="active"> <?php echo"Change Picture"; ?></li>
              
            		</ol>
					<hr/>
<div class="form-group">
	
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->



<div class="form-group">
	<?php echo $this->Form->label('Picture', 'Picture');?>
		<?php echo $this->Form->input('picture', array('class' => 'form-control','type'=>'file')); ?>
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



