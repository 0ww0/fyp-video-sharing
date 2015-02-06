
<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class="Vcategory form">
		
			<?php echo $this->Form->create('Fcategory', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Add Forum Category'); ?></h2>
					<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
					<li class="active"> <?php echo "Add new Category";?></li>
             		  <li class="active"> <?php echo $this->Html->link(' List of Forum Category', array('controller' => 'fcategories', 'action' => 'admin_index'));?></li>
              
            		</ol>
					<hr/>
<div class="form-group">
	<?php echo $this->Form->label('Name', 'Name');?>
		<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->