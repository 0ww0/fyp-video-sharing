
<br />
<div id="page-container" class="row">

	<!-- Action -->
	
	<div id="page-content" class="col-sm-9">

		<div class="videos form">
		
			<?php echo $this->Form->create('Video', array('inputDefaults' => array('label' => false), 'role' => 'form','type'=>'file')); ?>
				<fieldset>
					<h2><?php echo __('Edit Visibility'); ?></h2>
						<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
					<li class="active"> <?php echo "Edit Visibility";?></li>
             			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
					echo '<li>' . $this->Html->link(' Public Video ', array('controller' => 'videos', 'action' => 'index_public')).'</li>';
					echo '<li>' . $this->Html->link(' Private Video ', array('controller' => 'videos', 'action' => 'index_private')).'</li>';
					
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

		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
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




		</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->