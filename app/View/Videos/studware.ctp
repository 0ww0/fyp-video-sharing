
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Video index">
		
			<h2><?php echo __('Video - <b>Student Courseware</b>'); ?></h2>
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
					<li class="active"> <?php echo "List of Courseware Video";?></li>
             			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
					echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
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
			<div class="table-responsive">
				
				<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">


					<div class="panel panel-primary">
					<div class="panel-heading">
					<?php echo __('List of Courseware Video'); ?>
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
  		  'url' => array('action' => 'comware', $video['Video']['id'])
		));

		?>
		</h4>
		</div>
		</div>
		<div class="col-lg-4">
		<h4 class="list-group-item-text">
		<?php echo $this->Html->link($video['Video']['name'], array('action' => 'comware', $video['Video']['id'])); ?>
		
		</h4>
		<p></p>
		
		<h5 class="text-success list-group-item-text">
		Uploaded by:<b>		
		 <?php echo h($video['User']['fullName']); ?></b>
		</h5>
		<h5 class="text-danger list-group-item-text">Status:
		 <?php  if($video['User']['role_id'] == 1){
		 	echo "Admin";
		 }
		 if($video['User']['role_id'] == 2){
		 	echo "Student";
		 } 
		 if($video['User']['role_id'] == 3){
		 	echo "lecturer";
		 } 
		 ?></h5>

		<h6 class="text-muted list-group-item-text">
		<?php echo h($video['Video']['date']); ?>
		</h6>
		<h6 class="text-info list-group-item-text"> Visibility:<b>
			
				<?php echo h($video['Video']['visibility']); ?>
		</b></h6>
		<?php if ($video['Video']['status'] == "accept") {
			echo '<h6 class="text-success list-group-item-text"> Courseware :<b>' .' ' .h($video['Video']['status']).'</b></h6>' ;
		}

		if ($video['Video']['status'] == "pending") {
			echo '<h6 class="text-warning list-group-item-text"> Courseware :<b>' .' '.h($video['Video']['status']).'</b></h6>' ;
		}

		if ($video['Video']['status'] == "reject") {
			echo '<h6 class="text-danger list-group-item-text"> Courseware :<b>' .' '.h($video['Video']['status']).'</b></h6>' ;
		}
				
		?>
		<br/>
			<p>
			<?php echo $this->Html->link(__('View Comment'), array('action' => 'comware', $video['Video']['id']),array('class'=>'btn btn-info btn-xs')); ?></p>
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
