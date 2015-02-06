
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Video index">
		
			<h2><?php echo __('Video'); ?></h2>
				<ol class="breadcrumb">
              
             		
             <?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
					echo '<li class="active">' .'<i class="glyphicon glyphicon-user">'.'&nbsp;'.'</i>'.$this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index')).'</li>';
					echo '<li class="active">'."List of Video".'</li>';
					echo '<li>' . $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
					echo '<li>' . $this->Html->link(' Public Video ', array('controller' => 'videos', 'action' => 'index_public')).'</li>';
					echo '<li>' . $this->Html->link(' Private Video ', array('controller' => 'videos', 'action' => 'index_private')).'</li>';
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
					echo '<li class="active">' .'<i class="glyphicon glyphicon-user">'.'&nbsp;'.'</i>'.$this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index')).'</li>';
					echo '<li class="active">'."List of Video".'</li>';
					echo '<li>' . $this->Html->link(' List of Own Video ', array('controller' => 'videos', 'action' => 'index_own')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
					
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
					echo '<li class="active">' .'<i class="glyphicon glyphicon-user">'.'&nbsp;'.'</i>'.$this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index')).'</li>';
					echo '<li class="active">'."List of Video".'</li>';
					echo '<li>' . $this->Html->link(' List of Own Video ', array('controller' => 'videos', 'action' => 'index_own')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
					
			}?>
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				
					<tbody>


					<div class="panel panel-primary">
					<div class="panel-heading">
					<?php echo __('List of Video'); ?>
						</div>
						<div class="panel-body">
					
					
<?php foreach ($videos as $video): ?>
	<div class="row">
	<div class="col-lg-4">
	<div class="list-group">
		<h4 class="list-group-item-heading">
		<?php 
		echo $this->Html->image($video['Video']['thumb'], array(
    	"alt" => "Watch Video",'width'=>'200',
  		  'url' => array('action' => 'view', $video['Video']['id'])
		));

		?>
		</h4>
		</div>
		</div>
		<div class="col-lg-4">
		<h4 class="list-group-item-text">
		<?php echo $this->Html->link($video['Video']['name'], array('action' => 'view', $video['Video']['id'])); ?>
		
		</h4>
		<p></p>
		
		<h5 class="text-success list-group-item-text">
		Uploaded by:<b>		
		 <?php echo h($video['User']['fullName']); ?></b>
		</h5>
		<h6 class="text-muted list-group-item-text">
		<?php echo h($video['Video']['date']); ?>
		</h6>
		<h6 class="text-info list-group-item-text"> Visibility:<b>
			
				<?php echo h($video['Video']['visibility']); ?>
		</b></h6>
		</div>

		<div class="col-lg-4">

		 <li class="list-group-item">
		 <p> Course: </p> 
	<?php
      foreach($video['Course'] as $course){ 
        echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    	} 
   ?></li>
		<li class="list-group-item">
		Program:&nbsp;
		 <?php echo h($video['Program']['name']); ?></li>
	<li class="list-group-item">
	Faculty:&nbsp;
		 <?php echo h($video['Faculty']['name']); ?></li>
		
			</div>
<br/>			
	<?php if ( $this->Session->Read('Auth.User.role_id') == 1) {
				 echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $video['Video']['id']), array('class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $video['Video']['id']));
			}
				
			
			 ?>
		
	
	</div>
<?php endforeach; ?>
	
	</div>
	</div>


					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<?php echo $this->element('paginate');?>
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
